<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>

<body>

    <form  action="/users" method="post">
        @csrf
        
      
          <div class="mb-3">
            <label  class="form-label">name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label  class="form-label">email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label  class="form-label">password</label>
            <input type="text" class="form-control" name="password">
          </div>
        
        <button type="submit" class="btn btn-primary">add</button>
      </form>























</body>
</html>