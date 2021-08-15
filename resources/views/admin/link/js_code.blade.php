
  <script>
  
  $(document).on("click","#delete",function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    bootbox.confirm("Are you want to delete !!",function(confirmed){
      if(confirmed){
        window.location.href = link;
      };
    });
  });

</script>