<!DOCTYPE html>
<html class="no-js" lang="zxx">
@include('Layouts.head', ['title' => 'Publication - Pakistan Microfinance Network'])
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
                            Our Publications
                            <img src="{{asset('img/breadcrumb/titile.svg')}}" alt=""/>
                        </h3>
                        <div class="breadcrumb__list breadcrumb__list-translate">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                            <span>Our Publications</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about breadcrumb area end -->

    <!-- Publication area start -->
    <div class="container publication-container">
        <form class="mt-40" method="POST" action="{{ route('publications.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="">Date</label>
                    <input type="datetime-local" class="form-control" placeholder="Date" name="Datetime" required/>
                </div>
                <div class="col">
                    <label for="">Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" required/>
                </div>
            </div>
            <div class="row">
                <div class="col mt-20">
                    <label for="">Author</label>
                    <input type="text" class="form-control" placeholder="Title" name="Author" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-20">
                    <label for="exampleFormControlFile1">Upload File</label><br/>
                    <input type="file" class="form-control" id="attachment" name="attachment"
                           accept=".jpg, .jpeg, .png, .gif, .svg" required/>
                    <button class="btn btn-primary mt-3 float-end" type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>
    <div class="container">
        <table class="table table-responsive">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Date</th>
                <th scope="col">Attachments</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($publications as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['author'] }}</td>
                    <td>{{ $item['date_time'] }}</td>
                    <td><a href="{{ \Illuminate\Support\Facades\Storage::url('/').$item['file_path'] }}"
                        >Attachment</a></td>
                    <td>
                        <a href="#" onclick="openEditModal({{ $item }})">
                            <i class="fas fa-edit"></i>
                        </a>
                        <!-- Delete button with a form -->
                        <form action="{{ route('publications.delete', $item['id']) }}" method="POST"
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
            {{ $publications->links('pagination::bootstrap-5') }}
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
                                <label for="editDate">Date</label>
                                <input type="datetime-local" class="form-control" id="editDate" name="Datetime"
                                       required/>
                            </div>
                            <div class="form-group">
                                <label for="editTitle">Title</label>
                                <input type="text" class="form-control" id="editTitle" name="title" required/>
                            </div>
                            <div class="form-group">
                                <label for="editAuthor">Author</label>
                                <input type="text" class="form-control" id="editAuthor" name="Author" required/>
                            </div>
                            <div class="form-group">
                                <div class="d-none">
                                    <label for="editAttachment">Upload File</label>
                                    <input type="file" class="form-control" id="editAttachment" name="attachment"
                                           accept=".jpg, .jpeg, .png, .gif, .svg"/>
                                </div>
                                <div class="mt-2">
                                    <!-- Display existing attachment -->
                                    <a id="existingAttachment" href="">Attachment</a>
                                    <button type="button" class="btn btn-danger btn-sm mt-2" id="removeAttachment"
                                            onclick="removeAttachmentSection()">
                                        Remove Attachment
                                    </button>
                                </div>
                            </div>
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
@include('Layouts.footer')
<!-- footer area end -->

<!-- JS here -->
@include('Layouts.js-scripts')

<script>
    function openEditModal(publicationData) {
        console.log(publicationData);
        const {id, date_time, title, author, file_path} = publicationData;
        // Populate modal fields with data from the table row
        $('#editDate').val(new Date(date_time).toISOString().slice(0, 16));
        $('#editTitle').val(title);
        $('#editAuthor').val(author);
        $('#existingAttachment').attr('href', "{{\Illuminate\Support\Facades\Storage::url('/') }}" + file_path);
        $('#removeAttachment').parent().show();
        $('#editAttachment').parent().addClass('d-none').prop('required', false);
        // Set the form action URL to include the publication ID
        $('#editPublicationForm').attr('action', `/admin/publications/${id}`);

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
