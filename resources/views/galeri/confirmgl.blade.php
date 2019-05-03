<script type="text/javascript">
        
  $('.sa-remove-gl').click(function () {
     var postId = $(this).data('id');
                swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger waves-effect waves-light',
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: true,
                closeOnCancel: true
                },
                function(){
                    window.location.href = "destroygaleri/" + postId;
                });
            });

    </script>