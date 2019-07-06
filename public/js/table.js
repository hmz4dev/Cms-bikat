$(document).ready(function() {

    fetch_data();

    function fetch_data() {
        $.ajax({
            url: "/course/fetch_data",
            dataType: "json",
            success: function(data) {
                var html = '';
                html += '<tr>';
                html += '<td contenteditable id="course_code"></td>';
                html += '<td contenteditable id="course_name"></td>';
                html += '<td contenteditable id="credit_hours"></td>';
                html += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';
                for (var count = 0; count < data.length; count++) {
                    html += '<tr>';
                    html += '<td contenteditable class="column_name" data-column_name="course_code" data-id="' + data[count].id + '">' + data[count].course_code + '</td>';
                    html += '<td contenteditable class="column_name" data-column_name="course_name" data-id="' + data[count].id + '">' + data[count].course_name + '</td>';
                    html += '<td contenteditable class="column_name" data-column_name="credit_hours" data-id="' + data[count].id + '">' + data[count].credit_hours + '</td>';
                    html += '<td><button type="button" class="btn btn-danger btn-xs delete" id="' + data[count].id + '">Delete</button></td></tr>';
                }
                $('tbody').html(html);
            }
        });
    }

    var _token = $('input[name="_token"]').val();

    $(document).on('click', '#add', function() {
        var course_code = $('#course_code').text();
        var course_name = $('#course_name').text();
        var credit_hours = $('#credit_hours').text();
        if (course_code != '' && course_name != '' && credit_hours != '') {
            $.ajax({
                url: "{{ route('course.add_data') }}",
                method: "POST",
                data: { course_code: course_code, course_name: course_name, credit_hours: credit_hours, _token: _token },
                success: function(data) {
                    $('#message').html(data);
                    fetch_data();
                }
            });
        } else {
            $('#message').html("<div class='alert alert-danger'>Both Fields are required</div>");
        }
    });

    $(document).on('blur', '.column_name', function() {
        var column_name = $(this).data("column_name");
        var column_value = $(this).text();
        var id = $(this).data("id");

        if (column_value != '') {
            $.ajax({
                url: "{{ route('course.update_data') }}",
                method: "POST",
                data: { column_name: column_name, column_value: column_value, column_value: column_value, id: id, _token: _token },
                success: function(data) {
                    $('#message').html(data);
                }
            })
        } else {
            $('#message').html("<div class='alert alert-danger'>Enter some value</div>");
        }
    });

    $(document).on('click', '.delete', function() {
        var id = $(this).attr("id");
        if (confirm("Are you sure you want to delete this records?")) {
            $.ajax({
                url: "{{ route('course.delete_data') }}",
                method: "POST",
                data: { id: id, _token: _token },
                success: function(data) {
                    $('#message').html(data);
                    fetch_data();
                }
            });
        }
    });


});