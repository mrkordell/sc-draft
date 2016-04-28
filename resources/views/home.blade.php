<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Steelers Draft Board</title>

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
          <h1>Steelers Draft Board</h1>
          <div id="app">
            <div class="form-group">
            <select name="position" class="form-control" v-model="filter" v-on:change="filterPlayers">
              <option value="">All Players</option>
              <option value="WR">WR</option>
              <option value="DE">DE</option>
              <option value="NT">NT</option>
              <option value="OLB">OLB</option>
              <option value="ILB">ILB</option>
              <option value="CB">CB</option>
              <option value="S">S</option>
            </select>
          </div>
          <div id="load" v-if="!players">LOADING PLAYERS</div>
            <ul class="list-group">
              <li class="list-group-item" v-for="player in players" v-bind:class="{'list-group-item-warning': player.visited}">
                <span class="badge">@{{player.projected}}</span>
                @{{player.position}} @{{player.name}}
              </li>
            </ul>
          </div>
        </div>
    </div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/lodash/4.11.2/lodash.min.js"></script>

    <script>
    new Vue({
      el: '#app',
      data: {
        allPlayers: {!!$players!!},
        players: [],
        filter: ''
      },
      created: function(){
        this.players = this.allPlayers;
      },
      filterPlayers: function(){
        var position = this.filter;
        this.players = _.filter(this.allPlayers, function(p){
          return p.position = position;
        });
      }
    });
    </script>

  </body>
</html>
