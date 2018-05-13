@if (session('success'))
<script type="text/javascript">
        $(document).ready(function(){
        	swal("Success!", "{{ session('success') }}", "success");
        });
</script>
@endif

@if (session('alert'))
<script type="text/javascript">
        $(document).ready(function(){
            swal("Sorry!", "{{ session('alert') }}", "error");
        });
</script>
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
    <script type="text/javascript">
        $(document).ready(function(){
            swal("Oh snap!", "Change a few things up and try submiting again.", "error");

            $(".confirm").html('Close');


//            if()

        });


    </script>
    @endforeach
@endif