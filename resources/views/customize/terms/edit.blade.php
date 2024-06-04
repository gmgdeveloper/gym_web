@include('includes.header')

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

{{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> --}}


<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span>
                        @endforeach
                    </div>
                @endif
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        setTimeout(function() {
                            const alerts = document.querySelectorAll('.alert');
                            alerts.forEach(alert => {
                                alert.style.transition = 'opacity 0.5s ease';
                                alert.style.opacity = '0';
                                setTimeout(() => alert.remove(), 500); // Remove after fade out
                            });
                        }, 3000); // 3000 milliseconds = 3 seconds
                    });
                </script>

                <div class="card-header">
                    <h4 class="card-title">Edit Terms and Conditions</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('terms.update') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                value="{{ old('title', $terms->title ?? '') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" id="content">{{ old('content', $terms->content ?? '') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Initialize CKEditor -->
<script>
    CKEDITOR.replace('content');
</script>

<!-- Initialize Quill (uncomment if using Quill) -->
{{-- <script>
    var quill = new Quill('#content', {
        theme: 'snow'
    });
</script> --}}


@include('includes.footer')
