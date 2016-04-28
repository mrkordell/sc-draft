<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Steelers Draft Admin</title>

  <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h1>Steelers Draft Admin</h1>

        <ul class="list-group">
          @foreach($players as $player)
            <li class="list-group-item">
              <form action="/player" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="player_id" value="{{$player->id}}" />
                <button class="btn btn-primary pull-right" type="submit">Mark as
                  @if($player->drafted)
                    Undrafted
                  @else
                    Drafted
                  @endif
                </button>
              </form>

              <h4>{{$player->name}}</h4>
          @endforeach
        </ul>

      </div>
    </div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/lodash/4.11.2/lodash.min.js"></script>

  </body>
  </html>
