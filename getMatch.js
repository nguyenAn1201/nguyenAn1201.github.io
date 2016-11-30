$(document).ready(function() {

  $('#myForm').submit(function(e) {
    e.preventDefault();
  //jQuery('body').css('background-image', 'url("http://3.bp.blogspot.com/-4ihW7h8hTr8/UA6iCeyA8oI/AAAAAAAAAuw/xXDlVQdEWN4/s1600/dota-2-wallpaper-4.jpg")');
  var search_input = $('#search-bar').val(); 

  $.getJSON("https://api.opendota.com/api/players/" + search_input, function(data) {
    $('.playerProfile').empty().append(
        '<div id="playerProfile" class="text-xs-center" style="margin-top: 5%; padding:10px; background-color: #34495E">' +
        '<img src="' + data.profile.avatarmedium + '">' +
        '<h5 style="color: white"><a href="' + data.profile.profileurl + '">' + data.profile.personaname + '</a></h5>' + 
        '<ul class="list-unstyled">' + '</li>' +
        '<li style="color: white">Estimated MMR ' + '</li>' +
        '<li style="color: white">' + data.mmr_estimate.estimate + '</li>' +
      '</ul>' + '</div>'

    );
  });

  $.getJSON("https://api.opendota.com/api/players/" + search_input+ "/wl", function(data) {
        
    $('#playerProfile').append(
      '<p style="margin-bottom:-5px ;color: white"> Win - Loss</p>' +
      '<span style="color: green">' + data.win + 
      '</span>' + '<span style="color: white"> - </>' + '<span style="color: red">' + data.lose + '</>'
    );
  });

  $.getJSON("https://api.opendota.com/api/players/" +search_input+ "/matches", function(data) {

    console.log(data.length);
    if (data.length == 0)
    {
      alert("Please input a correct 9-digit SteamId")
      location.reload();
    }
      $('#result').empty().append(
        '<table id="myTable"  class="table table-inverse table-striped table-bordered table-hover table-responsive">' +
        '<thead>' +
          '<th class="text-xs-center">Hero</th>' +
          '<th class="text-xs-center">Duration</th>' +
          '<th class="text-xs-center">Result</th>' +
          '<th class="text-xs-center"><abbr title="Game Type">Type</abbr></th>' +
          '<th class="text-xs-center"><abbr title="Kill/Death/Assist">KDA</abbr></th>' +
        '</thhead>' +
        '<tbody id="matches">' + 
        '</tbody>'
      );  

      for (var i=0; i<100; i++) {
        getPortrait(data[i].hero_id, i);
      }
    

    function winloss(i) {
      if (data[i].radiant_win==true && data[i].player_slot <128) {
          return '<td class="text-xs-center"><font color="green"> WIN</font></td>';
        } else if (data[i].radiant_win==true && data[i].player_slot >=128) {
          return '<td class="text-xs-center"><font color="red"> LOSS</font> </td>';
        } else if (data[i].radiant_win==false && data[i].player_slot <128) {
          return '<td class="text-xs-center"><font color="red"> LOSS</font></td>';
        } else {
          return '<td class=text-xs-center><font color="green"> WIN</font> </td>';
        }     
    }

    function secondsTimeSpanToHMS(s) {
      var h = Math.floor(s/3600); //Get whole hours
      s -= h*3600;
      var m = Math.floor(s/60); //Get remaining minutes
      s -= m*60;
      return h+":"+(m < 10 ? '0'+m : m)+":"+(s < 10 ? '0'+s : s); //zero padding on minutes and seconds
    }

    //Determine Normal or Ranked game
    function type(i) {
       if (data[i].game_mode == 22) {  
          return '<td class="text-xs-center"> Ranked </td>';
        } else {
          return '<td class="text-xs-center"> Normal </td>';
        }
    }

    function getPortrait(i, u ){
      $.getJSON("https://raw.githubusercontent.com/odota/dotaconstants/master/json/heroes.json", function(herodata) {
        $('#matches').append(
          '<tr id="r1">' +
          '<td><img style="width: 30%; height: 20%; vertical-align:middle" src=http://cdn.dota2.com' + 
          herodata[i].img + '>' + 
          '<span class="small">' +
          '<a href="http://localhost/Doto2ez/matchPage.php?matchId=' + data[u].match_id + '"</a>' + herodata[i].localized_name + '</span></td>' + 
          '<td>' + secondsTimeSpanToHMS(data[u].duration) + '</td>' + 
          winloss(u) + 
          type(u) + 
          '<td>' + data[u].kills + "/" + data[u].deaths + "/" + data[u].assists + '</td>' +
          '</tr>' 
          );
      });
    }
    });

  });
  

});
