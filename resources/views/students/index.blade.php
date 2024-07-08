<!DOCTYPE html>
<html>

<head>
    <title>Student Management</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Student Management</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name of Student</th>
                    <th>Parent Name</th>
                    <th>Opted Courses</th>
                    <th>Enable or Disable</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->Name }}</td>
                        <td>{{ $student->parent->Name }}</td>
                        <td>
                            <ul>
                                @forelse ($student->optedCourses as $optedCourse)
                                    {{ $optedCourse->course->Course_Name }}
                                @empty
                                    No Courses Opted
                                @endforelse
                            </ul>
                            </ul>
                        </td>
                        <td>
                            @foreach ($student->optedCourses as $optedCourse)
                                <button class="btn btn-sm btn-toggle" data-id="{{ $optedCourse->id }}"
                                    data-status="{{ $optedCourse->is_active }}">
                                    {{ $optedCourse->is_active ? 'Disable' : 'Enable' }}
                                </button>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.btn-toggle').on('click', function() {
                var button = $(this);
                var id = button.data('id');
                var status = button.data('status');

                $.ajax({
                    url: '/toggle-course-status/' + id,
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            button.data('status', !status);
                            button.text(!status ? 'Disable' : 'Enable');

                            button.closest('tr').find('ul li').eq(button.index()).text(!status ?
                                'Enabled' : 'Disabled');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
