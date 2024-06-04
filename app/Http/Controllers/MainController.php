<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use App\Models\NewsAndEvents;
use App\Models\Publications;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function getAdminPublications(Request $request)
    {
        $publications = Publications::paginate(5); // Paginate with 10 records per page
        return view('Admin.publications', ['publications' => $publications]);
    }

    public function getPublicPublications(Request $request) {
        $publications = Publications::all();
        return view('publication', ['publications' => $publications]);
    }

    public function createNewPublication(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Datetime' => 'required|date_format:Y-m-d\TH:i', // Ensure valid datetime format
            'title' => 'required|string',
            'Author' => 'required|string',
            'attachment' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:4000', // File validation (max size 4000 KB)
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();
        // Handle file upload
        $originalFileName = pathinfo($request->attachment->getClientOriginalName(), PATHINFO_FILENAME);
        $sanitizedFileName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $originalFileName);
        $fileName = time() . '_' . $sanitizedFileName . '.' . $request->attachment->getClientOriginalExtension();
        $request->attachment->storeAs('public/publications', $fileName); // Store in 'publications' folder
        $publication = Publications::create([
            'date_time' => $validatedData['Datetime'],
            'title' => $validatedData['title'],
            'author' => $validatedData['Author'],
            'file_path' => 'publications/' . $fileName, // Store the relative path
        ]);
        return redirect()->back();
    }

    public function updatePublication(Request $request, $id)
    {
        // Find the publication by ID
        $publication = Publications::findOrFail($id);

        // Define validation rules
        $rules = [
            'Datetime' => 'sometimes|date_format:Y-m-d\TH:i', // Ensure valid datetime format
            'title' => 'sometimes|string',
            'Author' => 'sometimes|string',
            'attachment' => 'sometimes|file|mimes:jpeg,png,jpg,gif,svg|max:4000', // File validation (max size 4000 KB)
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get the validated data
        $validatedData = $validator->validated();

        // Update fields only if they are provided
        if (isset($validatedData['Datetime'])) {
            $publication->date_time = $validatedData['Datetime'];
        }

        if (isset($validatedData['title'])) {
            $publication->title = $validatedData['title'];
        }

        if (isset($validatedData['Author'])) {
            $publication->author = $validatedData['Author'];
        }

        // Handle file upload if a new file is provided
        if ($request->hasFile('attachment')) {
            // Delete the old file if it exists
            $fileName = $this->deleteTheOldFileIfItExists($publication, $request);
            $request->attachment->storeAs('public/publications', $fileName);
            $publication->file_path = 'publications/' . $fileName;
        }

        // Save the updated publication
        $publication->save();

        return redirect()->back()->with('success', 'Publication updated successfully');
    }

    public function deletePublication($id)
    {
        $publication = Publications::findOrFail($id);

        // Delete the file if it exists
        if (Storage::exists('/' . $publication->file_path)) {
            Storage::delete('/' . $publication->file_path);
        }

        // Delete the publication record
        $publication->delete();

        return redirect()->back()->with('success', 'Publication deleted successfully');
    }

    public function getAdminNewsAndEvents(Request $request)
    {
        $newsAndEvents = NewsAndEvents::paginate(5); // Paginate with 5 records per page
        return view('Admin.news-and-events', ['newsAndEvents' => $newsAndEvents]);
    }

    public function createNewsAndEvents(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Datetime' => 'required|date_format:Y-m-d\TH:i', // Ensure valid datetime format
            'title' => 'required|string',
            'description' => 'required|string',
            'attachment' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:4000', // File validation (max size 2048 KB)
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();
        // Handle file upload
        $originalFileName = pathinfo($request->attachment->getClientOriginalName(), PATHINFO_FILENAME);
        $sanitizedFileName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $originalFileName);
        $fileName = time() . '_' . $sanitizedFileName . '.' . $request->attachment->getClientOriginalExtension();
        $request->attachment->storeAs('public/news-and-events', $fileName); // Store in 'publications' folder
        $newsAndEvents = NewsAndEvents::create([
            'date_time' => $validatedData['Datetime'],
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'file_path' => 'news-and-events/' . $fileName, // Store the relative path
        ]);
        return redirect()->back();
    }

    public function updateNewsAndEvents(Request $request, $id)
    {
        // Find the publication by ID
        $newsAndEvents = NewsAndEvents::findOrFail($id);

        // Define validation rules
        $rules = [
            'Datetime' => 'sometimes|date_format:Y-m-d\TH:i', // Ensure valid datetime format
            'title' => 'sometimes|string',
            'description' => 'sometimes|string',
            'attachment' => 'sometimes|file|mimes:jpeg,png,jpg,gif,svg|max:4000', // File validation (max size 4000 KB)
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get the validated data
        $validatedData = $validator->validated();

        // Update fields only if they are provided
        if (isset($validatedData['Datetime'])) {
            $newsAndEvents->date_time = $validatedData['Datetime'];
        }

        if (isset($validatedData['title'])) {
            $newsAndEvents->title = $validatedData['title'];
        }

        if (isset($validatedData['description'])) {
            $newsAndEvents->description = $validatedData['description'];
        }

        // Handle file upload if a new file is provided
        if ($request->hasFile('attachment')) {
            // Delete the old file if it exists
            $fileName = $this->deleteTheOldFileIfItExists($newsAndEvents, $request);
            $request->attachment->storeAs('public/news-and-events', $fileName);
            $newsAndEvents->file_path = 'news-and-events/' . $fileName;
        }

        // Save the updated newsAndEvents
        $newsAndEvents->save();

        return redirect()->back()->with('success', 'news-and-events updated successfully');
    }

    public function deleteNewsAndEvents($id)
    {
        $newsAndEvents = NewsAndEvents::findOrFail($id);

        // Delete the file if it exists
        if (Storage::exists('/' . $newsAndEvents->file_path)) {
            Storage::delete('/' . $newsAndEvents->file_path);
        }

        // Delete the newsAndEvents record
        $newsAndEvents->delete();

        return redirect()->back()->with('success', 'news-and-events deleted successfully');
    }

    public function getAdminCareers(Request $request)
    {
        $careers = Careers::query()->paginate(5); // Paginate with 5 records per page
        return view('Admin.careers', ['careers' => $careers]);
    }

    public function getPublicCareers(Request $request)
    {
        $careers = Careers::all(); // Paginate with 5 records per page
        return view('careers', ['careers' => $careers]);
    }

    public function createCareers(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'closingDate' => 'required|date_format:Y-m-d', // Ensure valid datetime format
            'jobTitle' => 'required|string',
            'description' => 'required|string',
            'attachment' => 'sometimes|file|mimes:pdf,doc,docx|max:4000', // File validation (max size 2048 KB)
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();
        if ($request->hasFile('attachment')) {
            // Handle file upload
            $originalFileName = pathinfo($request->attachment->getClientOriginalName(), PATHINFO_FILENAME);
            $sanitizedFileName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $originalFileName);
            $fileName = time() . '_' . $sanitizedFileName . '.' . $request->attachment->getClientOriginalExtension();
            $request->attachment->storeAs('public/careers', $fileName); // Store in 'careers' folder
        }
        $careers = Careers::create([
            'job_title' => $validatedData['jobTitle'],
            'closing_date' => $validatedData['closingDate'],
            'description' => $validatedData['description'],
            'file_path' => $request->hasFile('attachment') ? 'careers/' . $fileName : null, // Store the relative path
        ]);
        return redirect()->back();
    }

    public function updateCareers(Request $request, $id)
    {
        // Find the publication by ID
        $careers = Careers::query()->findOrFail($id);

        // Define validation rules
        $rules = [
            'closingDate' => 'sometimes|date_format:Y-m-d', // Ensure valid datetime format
            'jobTitle' => 'sometimes|string',
            'description' => 'sometimes|string',
            'attachment' => 'sometimes|file|mimes:jpeg,png,jpg,gif,svg|max:4000', // File validation (max size 4000 KB)
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get the validated data
        $validatedData = $validator->validated();

        // Update fields only if they are provided
        if (isset($validatedData['jobTitle'])) {
            $careers->job_title = $validatedData['jobTitle'];
        }

        if (isset($validatedData['closingDate'])) {
            $careers->closing_date = $validatedData['closingDate'];
        }

        if (isset($validatedData['description'])) {
            $careers->description = $validatedData['description'];
        }

        // Handle file upload if a new file is provided
        if ($request->hasFile('attachment')) {
            // Delete the old file if it exists
            $fileName = $this->deleteTheOldFileIfItExists($careers, $request);
            $request->attachment->storeAs('public/careers', $fileName);
            $careers->file_path = 'careers/' . $fileName;
        }

        // Save the updated careers
        $careers->save();

        return redirect()->back()->with('success', 'career entry updated successfully');
    }

    public function deleteCareers($id)
    {
        $careers = Careers::query()->findOrFail($id);

        // Delete the file if it exists
        if (Storage::exists('/' . $careers->file_path)) {
            Storage::delete('/' . $careers->file_path);
        }

        // Delete the careers record
        $careers->delete();

        return redirect()->back()->with('success', 'career deleted successfully');
    }

    /**
     * @param $newsAndEvents
     * @param Request $request
     * @return string
     */
    public function deleteTheOldFileIfItExists($modalObject, Request $request): string
    {
        if (Storage::exists('/' . $modalObject->file_path)) {
            Storage::delete('/' . $modalObject->file_path);
        }

        $originalFileName = pathinfo($request->attachment->getClientOriginalName(), PATHINFO_FILENAME);
        $sanitizedFileName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $originalFileName);
        return time() . '_' . $sanitizedFileName . '.' . $request->attachment->getClientOriginalExtension();
    }

}
