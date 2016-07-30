@if(session()->has('flash_message'))

	<script>
		swal({
			title: "Succes!",
			text: "Here's my Success message!",
			type: "success",
			timer: 3000,
			showConfirmButton: false });
		});
	</script>

@endif