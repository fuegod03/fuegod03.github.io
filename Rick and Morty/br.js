
// Data Base
var active=$(".active");
var glic=$(".glic");


var active2=$(".active2");
var glic2=$(".glic2");

var active3=$(".active3");
var glic3=$(".glic3");

var active4=$(".active4");
var glic4=$(".glic4");

var active5=$(".active5");
var glic5=$(".glic5");

var active6=$(".active6");
var glic6=$(".glic6");



// Selection of Character
var random1=Math.floor(Math.random() * 493);
var random2=Math.floor(Math.random() * 493);
var random3=Math.floor(Math.random() * 493);

var random4=Math.floor(Math.random() * 493);
var random5=Math.floor(Math.random() * 493);
var random6=Math.floor(Math.random() * 493);



// First Box
var firstFunc= function(){

var selection= $.ajax({

  url: "https://rickandmortyapi.com/api/character/" + random1 + "/",
  method: "GET"
});

selection.done(function (data) {
selectio=data;

  $(".box1 img").attr("src", data.image);
  $(".nombre1").text(data.name);
  $(".status1").text(data.status);
  $(".species1").text(data.species);
  $(".gender1").text(data.gender);
  $(".origin1").text(data.origin.name);
  $(".LO1").text(data.location.name);
  if($(".LO1").text()=="Earth (Replacement Dimension)"){
    $(".LO1").text("Earth R.D.")
  };
});

selection.fail(function(jqXHR, textStatus) {
  alert("Request failed: " + textStatus);
});

};
firstFunc();

// Second Box

  var secondFunc= function(){

  var selection= $.ajax({

    url: "https://rickandmortyapi.com/api/character/" + random2 + "/",
    method: "GET"
  });

  selection.done(function (data) {
  selectio=data;
    $(".box2 img").attr("src", data.image);
    $(".nombre2").text(data.name);
    $(".status2").text(data.status);
    $(".species2").text(data.species);
    $(".gender2").text(data.gender);
    $(".origin2").text(data.origin.name);
    $(".LO2").text(data.location.name);
    if($(".LO2").text()=="Earth (Replacement Dimension)"){
      $(".LO2").text("Earth R.D.")
    };
  });

  selection.fail(function(jqXHR, textStatus) {
    alert("Request failed: " + textStatus);
  });

  };

  secondFunc()

  // Third Box
  var thirdFunc= function(){

  var selection= $.ajax({

    url: "https://rickandmortyapi.com/api/character/" + random3 + "/",
    method: "GET"
  });

  selection.done(function (data) {
  selectio=data;
    $(".box3 img").attr("src", data.image);
    $(".nombre3").text(data.name);
    $(".status3").text(data.status);
    $(".species3").text(data.species);
    $(".gender3").text(data.gender);
    $(".origin3").text(data.origin.name);
    $(".LO3").text(data.location.name);
    if($(".LO3").text()=="Earth (Replacement Dimension)"){
      $(".LO3").text("Earth R.D.")
    };
  });

  selection.fail(function(jqXHR, textStatus) {
    alert("Request failed: " + textStatus);
  });

  };
thirdFunc()

// Four Box

var fourFunc= function(){

var selection= $.ajax({

  url: "https://rickandmortyapi.com/api/character/" + random4 + "/",
  method: "GET"
});

selection.done(function (data) {
selectio=data;
  $(".box4 img").attr("src", data.image);
  $(".nombre4").text(data.name);
  $(".status4").text(data.status);
  $(".species4").text(data.species);
  $(".gender4").text(data.gender);
  $(".origin4").text(data.origin.name);
  $(".LO4").text(data.location.name);
  if($(".LO4").text()=="Earth (Replacement Dimension)"){
    $(".LO4").text("Earth R.D.")
  };
});

selection.fail(function(jqXHR, textStatus) {
  alert("Request failed: " + textStatus);
});

};
fourFunc()

// Five Box

var fiveFunc= function(){

var selection= $.ajax({

  url: "https://rickandmortyapi.com/api/character/" + random5 + "/",
  method: "GET"
});

selection.done(function (data) {
selectio=data;
  $(".box5 img").attr("src", data.image);
  $(".nombre5").text(data.name);
  $(".status5").text(data.status);
  $(".species5").text(data.species);
  $(".gender5").text(data.gender);
  $(".origin5").text(data.origin.name);
  $(".LO5").text(data.location.name);
  if($(".LO5").text()=="Earth (Replacement Dimension)"){
    $(".LO5").text("Earth R.D.")
  };
});

selection.fail(function(jqXHR, textStatus) {
  alert("Request failed: " + textStatus);
});

};
fiveFunc()

// Six Box
var sixFunc= function(){

var selection= $.ajax({

  url: "https://rickandmortyapi.com/api/character/" + random6 + "/",
  method: "GET"
});

selection.done(function (data) {
selectio=data;
  $(".box6 img").attr("src", data.image);
  $(".nombre6").text(data.name);
  $(".status6").text(data.status);
  $(".species6").text(data.species);
  $(".gender6").text(data.gender);
  $(".origin6").text(data.origin.name);
  $(".LO6").text(data.location.name);
  if($(".LO6").text()=="Earth (Replacement Dimension)"){
    $(".LO6").text("Earth R.D.")
  };
});

selection.fail(function(jqXHR, textStatus) {
  alert("Request failed: " + textStatus);
});

};
sixFunc();

// PORTALS

// first portal
var firstClick= function() {
active.click(function () {
active.removeAttr("class");
active.addClass("animated jackInTheBox ");
glic.removeAttr("class");
})
}
firstClick();

// second portal

var secondClick= function() {
active2.click(function () {
active2.removeAttr("class");
active2.addClass("animated jackInTheBox ");
glic2.removeAttr("class");
})
}
secondClick();

// Third Portal

var thirdClick= function() {
active3.click(function () {
active3.removeAttr("class");
active3.addClass("animated jackInTheBox ");
glic3.removeAttr("class");
})
}
thirdClick();

// Fourth Portal

var fourthClick= function() {
active4.click(function () {
active4.removeAttr("class");
active4.addClass("animated jackInTheBox ");
glic4.removeAttr("class");
})
}
fourthClick();

// Fifth Portal

var fifthClick= function() {
active5.click(function () {
active5.removeAttr("class");
active5.addClass("animated jackInTheBox ");
glic5.removeAttr("class");
})
}
fifthClick();

// Sixth Portal

var sixthClick= function() {
active6.click(function () {
active6.removeAttr("class");
active6.addClass("animated jackInTheBox ");
glic6.removeAttr("class");
})
}
sixthClick();
