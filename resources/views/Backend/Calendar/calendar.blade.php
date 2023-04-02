@extends('layouts.master')

@section('content')
<a href="{{ route('calender.event') }}"> <button class="btn btn-success d-inline-block m-1 float-right">Add Event</button></a></td>

  <!-- Modal -->
  <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Event title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" id="title">
          <span id="titleError" class="text-danger"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div id="calendar">
  </div>

    <div class="card">
      <div class="card-body">
        
        <script>

            $(document).ready(function(){
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                var calendar = @json($event);
                console.log((event));
                $('#calendar').fullCalendar({
                    header: {
                        left : 'prev, next, today',
                        center : 'title',
                        right : 'month, agendaWeek, agendaDay'
                    },
                    events: calendar,
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end, allDays){
                        $('#eventModal').modal('toggle');

                        $('#saveBtn').click(function(){
                            var title = $('$title').val();
                            var start_date = moment(start).format('YYYY-MM-DD');
                            var end_date = moment(end).format('YYYY-MM-DD');
                        

                            $.ajax({
                            url: "",
                            type:"POST",
                            dataType:'json',
                            data:{ title, start_date, end_date  },
                            success:function(response)
                            {
                               console.log(response);
                            },
                            error:function(error)
                            {
                                if(error.responseJSON.errors) {
                                    $('#titleError').html(error.responseJSON.errors.title);
                                }
                            },
                        });
                      });
                    }
                });
            });
          </script>
      </div>
    </div>
    @endsection