
// This is the Date Base
var pokemonDB = [
  {
    name: 'charmander',
    type: 'fire',
    attack: 70,
    defence:32,
    hp: 70,
    level: 1,
    img: "http://www.smogon.com/dex/media/sprites/xy/charmander.gif"
  },
  {
    name: 'bulbasaur',
    type: 'earth',
    attack: 84,
    defence:50,
    hp: 50,
    level: 1,
    img:"http://www.smogon.com/dex/media/sprites/xy/bulbasaur.gif"
  },
{
  name:"squirtle",
  type: "water",
  attack:92,
  defence:30,
  hp:50,
  level:1,
  img:"http://www.smogon.com/dex/media/sprites/xy/squirtle.gif"
}
]


var displayAttack=  document.getElementById("battle-screen").querySelector(".choose")


var pokemonsEl=document.querySelector(".select-screen").querySelectorAll(".character")

var pokemonName=document.querySelector(".select-screen").querySelector(".character").querySelector(".title").textContent

// States

var gameState={
  currentPokemon:"",
  currentRivalPokemon:"",

}

// elements

var attackBtnEL = document.getElementById("battle-screen").querySelectorAll(".attack")






var battleScreen=document.querySelector("#battle-screen")


console.log(battleScreen)

var Playhard= function(){
var currentPokemon = gameState.currentPokemon[0]
var currentRivalPokemon = gameState.currentRivalPokemon[0]
  var statsPokemonName =document.querySelector("#battle-screen").querySelector(".player").querySelector(".player1").querySelector(".stats").querySelector(".name")
 statsPokemonName.innerHTML = currentPokemon.name
  var statsPokemonRivalName=document.querySelector("#battle-screen").querySelector(".cpu").querySelector(".player2").querySelector(".stats").querySelector(".name")
statsPokemonRivalName.innerHTML = currentRivalPokemon.name
}
// cpu attack
var CpuAttack= function() {
 var attacks=["water", "leaf", "fire"]
 return attacks[randomNumber(0,3)]
}

var i=0

// This is the initial loop

while(i<pokemonsEl.length){

//add function to all character on screen select
pokemonsEl[i].onclick=function(){
//current slected pokemons name
  var pokemonName=this.dataset.pokemon
  // elements  for images in battle screen
  var player1IMG= document.querySelector(".player1").getElementsByTagName("img")
var player2IMG=document.querySelector(".player2").getElementsByTagName("img")

// we save the current pokemon
   gameState.currentPokemon=pokemonName, //assinging value to pokemonName
// CPU piks a pokemon
CPUpick()



//change screen to battle scene
battleScreen.classList.add("active")

//select data for current User pokemon
gameState.currentPokemon = pokemonDB.filter(function(pokemon){
  return pokemon.name == gameState.currentPokemon;
})

player1IMG[0].src=gameState.currentPokemon[0].img

//select data for current Rival pokemon
gameState.currentRivalPokemon = pokemonDB.filter(function(pokemon){
  return pokemon.name == gameState.currentRivalPokemon;
})

Playhard()
player2IMG[0].src=gameState.currentRivalPokemon[0].img

gameState.currentPokemon[0].health= calculateInitialHealth(gameState.currentPokemon)


gameState.currentPokemon[0].originalhealth= calculateInitialHealth(gameState.currentPokemon)

gameState.currentRivalPokemon[0].health= calculateInitialHealth(gameState.currentRivalPokemon)

gameState.currentRivalPokemon[0].originalhealth= calculateInitialHealth(gameState.currentRivalPokemon)



console.log(gameState)

//cpu health goes down


// user health goes down


// leaf > siccors > water > leaf


// siccors > water


//water > leaf


// water > leaf


// depending on pokemong type and defence is how hard the attack is going to be and how much health it will take out

  }
  i++
}


var randomNumber = function (min, max) {
   return Math.floor(Math.random()*(max-min)+min)
}

// Choose a pokemon and prevent the CPU to choose the same pokemon
var CPUpick= function(){
do{
  gameState.currentRivalPokemon=pokemonsEl[randomNumber(0,3)].dataset.pokemon
}
while(gameState.currentPokemon == gameState.currentRivalPokemon)

}

 //User choose attack
var a = 0
while (a<attackBtnEL.length){


  attackBtnEL[a].onclick= function(){
    var attackName= this.dataset.attack
    gameState.currentUserAttack=attackName



play(attackName, CpuAttack())

  }
 a++
}




// sellecting attack strenght and selecting winner

var atttackMove = function(attack,level, stack, critical,enemy, current){

  console.log( enemy.name + " before:" + enemy.health);

 var attackAmount= ((attack * level) *( stack + critical))/2;
 enemy.health = enemy.health - attackAmount;

var userHp= document.querySelector(".player1").querySelector(".stats").querySelector(".health").querySelector(".health-bar").querySelector(".inside")

var CpuHP= document.querySelector(".cpu").querySelector(".player2").querySelector(".stats").querySelector(".health").querySelector(".health-bar").querySelector(".inside")

if( enemy.owner == "user"){
var minuspercent=((enemy.health * 100)/enemy.originalhealth)
userHp.style.width = (minuspercent <0) ? 0:minuspercent + "%"
}else{
var minuspercent=((enemy.health * 100)/enemy.originalhealth)
CpuHP.style.width = (minuspercent <0) ? 0:minuspercent + "%"
}

// then whoever gets to health = 0 looses
var winner=[ ]

if(enemy.health <= 0 ){
enemy.health="looser"
current.health="winner"
winner.push(current.name)
console.log(winner)
}

if(current.health <= 0 ){
current.health="looser"
enemy.health="winner"
winner.push(enemy.name)
console.log(winner)
}

if (winner.length >=1 ){
  alert("The winner is " + winner)
}


console.log( enemy.name + " after:" + enemy.health)
}
// Calculate the pokemon Health

var calculateInitialHealth= function(user){

 return ((0.20 * Math.sqrt(user[0].level)) * user[0].defence) * user[0].hp
}


//
var play = function(UserAttack, CpuAttack){


var currentPokemon = gameState.currentPokemon[0]
var currentRivalPokemon = gameState.currentRivalPokemon[0]

currentPokemon.owner="user"
currentRivalPokemon.owner="cpu"

switch(UserAttack){

case "water":

if(CpuAttack == "water"){

 console.log("It´s a draw")
if(currentPokemon.health >=0 && currentRivalPokemon.health >=0){
atttackMove(currentPokemon.attack, currentPokemon.level,
1.5,.4,currentRivalPokemon, currentPokemon)

atttackMove(currentRivalPokemon.attack,
currentRivalPokemon.level,
1.5,.4,currentPokemon,currentRivalPokemon)

displayAttack.innerHTML= "water"
}

}

if(CpuAttack == "leaf"){
   console.log("water loses")
if(currentPokemon.health >=0 && currentRivalPokemon.health >=0){
atttackMove(currentPokemon.attack,
currentPokemon.level,
.5,.01,currentRivalPokemon, currentPokemon)

atttackMove(currentRivalPokemon.attack,
currentRivalPokemon.level,
1.5,.4,currentPokemon,currentRivalPokemon)
displayAttack.innerHTML= "leaf"
}
}


if(CpuAttack == "fire"){

console.log("water win")
if(currentPokemon.health >=0 && currentRivalPokemon.health >=0){
atttackMove(currentPokemon.attack,
currentRivalPokemon.level,
4,1.2,currentRivalPokemon, currentPokemon)

atttackMove(currentRivalPokemon.attack,
currentRivalPokemon.level,
1.5,.4,currentPokemon,currentRivalPokemon)
displayAttack.innerHTML= "fire"
}
}

break;

case "leaf":
if(CpuAttack == "leaf"){
 console.log("It´s a draw")
if(currentPokemon.health >=0 && currentRivalPokemon.health >=0){
atttackMove(currentPokemon.attack,
currentPokemon.level,
1.5,.4,currentRivalPokemon, currentPokemon)

atttackMove(currentRivalPokemon.attack,
currentRivalPokemon.level,
1.5,.4,currentPokemon,currentRivalPokemon)
displayAttack.innerHTML= "leaf"
}

}

if(CpuAttack == "water"){
   console.log("leaf win")
if(currentPokemon.health >=0 && currentRivalPokemon.health >=0){
atttackMove(currentPokemon.attack,
currentPokemon.level,
3,1.2,currentRivalPokemon, currentPokemon)

atttackMove(currentRivalPokemon.attack,
currentRivalPokemon.level,
1.5,.4,currentPokemon,currentRivalPokemon)
displayAttack.innerHTML= "water"
}
}


if(CpuAttack == "fire"){
console.log("leaf looses")
if(currentPokemon.health >=0 && currentRivalPokemon.health >=0){
atttackMove(currentPokemon.attack,
currentPokemon.level,
1.5,.4,currentRivalPokemon, currentPokemon)

atttackMove(currentRivalPokemon.attack,
currentRivalPokemon.level,
3,1.2,currentPokemon,currentRivalPokemon)
displayAttack.innerHTML= "fire"
}
}
break;
case "fire":

if(CpuAttack == "fire"){

  console.log("It´s a draw")

if(currentPokemon.health >=0 && currentRivalPokemon.health >=0){
atttackMove(currentPokemon.attack,
currentPokemon.level,
1.5,.4,currentRivalPokemon, currentPokemon)

atttackMove(currentRivalPokemon.attack,
currentRivalPokemon.level,
1.5,.4,currentPokemon,currentRivalPokemon)
displayAttack.innerHTML= "fire"
}
}

if(CpuAttack == "water"){
console.log("fire loses")
 if(currentPokemon.health >=0 && currentRivalPokemon.health >=0){
atttackMove(currentPokemon.attack,
currentPokemon.level,
1.5,.4,currentRivalPokemon, currentPokemon)

atttackMove(currentRivalPokemon.attack,
currentRivalPokemon.level,
3,1.2,currentPokemon,currentRivalPokemon)
displayAttack.innerHTML= "water"
}

}
if(CpuAttack == "leaf"){
console.log("fire win")
  if(currentPokemon.health >=0 && currentRivalPokemon.health >=0){
atttackMove(currentPokemon.attack,
currentPokemon.level,
3,1.2,currentRivalPokemon, currentPokemon)

atttackMove(currentRivalPokemon.attack,
currentRivalPokemon.level,
1.5,.4,currentPokemon,currentRivalPokemon)
displayAttack.innerHTML= "leaf"
}

}

}
}












// create a formula for attacks
// console.log((attack * level) * stack / 7)



// create a formula for health
//HP = 0.20 x Sqrt(Pokemon_level) x (HP_base_stat)
// console.log(((0.20 * Math.sqrt(level)) * stamina) * 15)




// let user choose 1 and then assign a random pokemon to battle thats not the users pokemon
// p1 vs p2




// when one user loses all his health declare a winner
