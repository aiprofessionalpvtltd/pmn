<!DOCTYPE html>
<html class="no-js" lang="zxx">
@include('.Layouts.head')
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- header area start -->
@include('Layouts.header')
<!-- header area end -->

<main>
    <!-- about breadcrumb area start -->
    <section
        class="breadcrumb__area breadcrumb-style pt-190 pb-210 p-relative z-index-1"
        data-background="{{asset('img/breadcrumb/breadcrumb-bg-1.jpg')}}"
    >
        <div class="breadcrumb__bg-overlay m-img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="breadcrumb__content text-center">
                        <h3 class="breadcrumb__title">
                            Career
                            <img src="{{asset('img/breadcrumb/titile.svg')}}" alt=""/>
                        </h3>
                        <div class="breadcrumb__list breadcrumb__list-translate">
                            <span><a href="{{route('home')}}">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                            <span> Career</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about breadcrumb area end -->

    <!-- Publication area start -->
    <div class="container publication-container">
        <form class="mt-40" method="POST" action="{{ route('careers.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="">Job Title</label>
                    <input type="text" class="form-control" placeholder="Job title..." name="jobTitle" required/>
                </div>
                <div class="col">
                    <label for="">Closing Date</label>
                    <input type="date" class="form-control" placeholder="Closing Date..." name="closingDate" required/>
                </div>
            </div>
            <div class="row">
                <div class="col mt-20">
                    <label for="">Description</label>
                    <textarea class="form-control" placeholder="Description..." name="description" required ></textarea>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-6 mt-20">--}}
{{--                    <label for="exampleFormControlFile1">Upload File</label><br/>--}}
{{--                    <input type="file" class="form-control" id="attachment" name="attachment"--}}
{{--                           accept=".pdf,.doc,.docx" required/>--}}
{{--                </div>--}}
{{--            </div>--}}
            <input type="submit">
        </form>
    </div>
    <div style="width: 50%; margin: 0 auto;">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Job Title</th>
                <th scope="col">Closing Date</th>
                <th scope="col">Description</th>
                <th scope="col">Attachment</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($careers as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['job_title'] }}</td>
                    <td>{{ $item['closing_date'] }}</td>
                    <td>{!! nl2br(e($item['description'])) !!}</td>
                    <td><a href="{{ \Illuminate\Support\Facades\Storage::url('/').$item['file_path'] }}"
                        >Attachment</a></td>
                    <td>
                        <a href="#" onclick="openEditModal({{ $item }})">
                            <i class="fas fa-edit"></i>
                        </a>
                        <!-- Delete button with a form -->
                        <form action="{{ route('careers.delete', $item['id']) }}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this publication?')">
                                <i class="fas fa-trash-alt"></i> <!-- Font Awesome delete icon -->
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Pagination links -->
        <div class="d-flex justify-content-center">
            {{ $careers->links('pagination::bootstrap-5') }}
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" tabindex="-1"
             role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Publication</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editPublicationForm" action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body" style="width:500px;">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="editDate">Job Title</label>
                                <input type="text" class="form-control" id="editTitle" name="jobTitle"
                                       required/>
                            </div>
                            <div class="form-group">
                                <label for="editTitle">Closing Date</label>
                                <input type="date" class="form-control" id="editDate" name="closingDate" required/>
                            </div>
                            <div class="form-group">
                                <label for="editAuthor">Description</label>
                                <textarea class="form-control" id="editDescription" name="description"
                                ></textarea>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <div class="d-none">--}}
{{--                                    <label for="editAttachment">Upload File</label>--}}
{{--                                    <input type="file" class="form-control" id="editAttachment" name="attachment"--}}
{{--                                           accept=".jpg, .jpeg, .png, .gif, .svg"/>--}}
{{--                                </div>--}}
{{--                                <div class="mt-2">--}}
{{--                                    <!-- Display existing attachment -->--}}
{{--                                    <a id="existingAttachment" href="">Attachment</a>--}}
{{--                                    <button type="button" class="btn btn-danger btn-sm mt-2" id="removeAttachment"--}}
{{--                                            onclick="removeAttachmentSection()">--}}
{{--                                        Remove Attachment--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <input type="hidden" id="publicationId" name="id">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Publication area end -->
</main>

<!-- footer area start -->
@include('.Layouts.footer')
<!-- footer area end -->

<!-- JS here -->
@include('.Layouts.js-scripts')

<script>
    function openEditModal(publicationData) {
        console.log(publicationData);
        const {id, closing_date, job_title, description, file_path} = publicationData;
        // Populate modal fields with data from the table row
        $('#editDate').val(closing_date);
        $('#editTitle').val(job_title);
        $('#editDescription').val(description);
        {{--$('#existingAttachment').attr('href', "{{\Illuminate\Support\Facades\Storage::url('/') }}" + file_path);--}}
        {{--$('#removeAttachment').parent().show();--}}
        {{--$('#editAttachment').parent().addClass('d-none').prop('required', false);--}}
        // Set the form action URL to include the publication ID
        $('#editPublicationForm').attr('action', `/admin/careers/${id}`);

        // Set the publication ID in a hidden input field
        $('#publicationId').val(id);
        $('#editModal').modal('show'); // Show the modal
    }

    function removeAttachmentSection() {
        $('#removeAttachment').parent().hide();
        $('#editAttachment').prop('required', true).parent().removeClass('d-none');
    }

</script>

</body>
</html>
