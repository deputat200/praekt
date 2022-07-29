<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="container">
      <form action="{{url('test')}}" method="POST">
        @csrf
        <div style="margin: 50px  0 0 0" class="row col-12">
            <div class="form-floating col-2">
                <select class="form-select" id="floatingSelect" name="social" aria-label="Floating label select example">
                  <option  value="https://www.facebook.com/">Facebook</option> <i class="fa-brands fa-facebook"></i>  
                  <option  value="https://github.com/">Git Hub</option>
                  <option  value ="https://www.instagram.com/">Instagram</option>
                  <option  value="https://t.me/">Telegram</option>
                  <option  value="https://web.whatsapp.com/">Whats app</option>
                  <option  value="https://www.twitter.com/">Twitter</option>
                </select>
                <label for="floatingSelect">Works with selects</label>
                <button style="margin: 50px 0 0 0 ;" type="submit" class="btn btn-primary">Submit</button>
              </div>
              <div class="col-6">
                <div style="margin: 0 25px 0 -25px; " class="form-floating">
                    <textarea name="cil" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Accaunt Name</label>
                  </div>
              </div>
             
           </div>
        </form>



       



        <table class="table">
        <thead>
          <th>SILKA</th>
        </thead>
          @foreach($tel as $te)
          <tr>
             <td>
              <a target="__blank" href="{{$te->social . $te->cil}}" >Accauntga O'tish</a>
             </td>
         
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>