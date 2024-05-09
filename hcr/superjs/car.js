//when user click on jeep
function jeeprun(jeep)
{
    jeep.style.animation="jeeprun ease-in-out 10s 1";
    setTimeout(()=>
    {
        jeep.style.animation="carshake linear 1s infinite";
    },10000);
    console.log("jeep");
}
//when user click on truck
function truckrun(truck)
{
    console.log("aa");
    truck.children[0].children[0].style.animation="truckmovingtire linear 1s infinite";
    truck.children[1].children[0].style.animation="truckmovingtire linear 1s infinite";
    setTimeout(()=>
    {
        truck.children[0].children[0].style.animation="movingtire linear 1.5s infinite";
        truck.children[1].children[0].style.animation="movingtire linear 1.5s infinite";
        setTimeout(()=>
        { 
            truck.children[0].children[0].style.animation="movingtire linear 2.1s infinite";
            truck.children[1].children[0].style.animation="movingtire linear 2.1s infinite";
            
        },4000);
    },1000);
    truck.style.animation="truckrun ease-in-out 10s 1";
    setTimeout(()=>
    {
        truck.style.animation="carshake linear 1s infinite";
    },10000);
}
//when user click on formula
function formularun(formula)
{
    formula.previousElementSibling.style.animation="trackmove linear 5s infinite";
    formula.previousElementSibling.previousElementSibling.style.animation="trackmove linear 5s infinite";
    formula.previousElementSibling.previousElementSibling.previousElementSibling.style.animation="trackmove linear 10s infinite";
    formula.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.style.animation="trackmove linear 10s infinite";
    formula.style.animation="formularun ease-in-out 2s 1";
    setTimeout(()=>
    {
        formula.style.animation="carshake linear 1s infinite";
        formula.previousElementSibling.style.animation="trackmove linear 10s infinite";
      formula.previousElementSibling.previousElementSibling.style.animation="trackmove linear 10s infinite";
      formula.previousElementSibling.previousElementSibling.previousElementSibling.style.animation="trackmove linear 20s infinite";
      formula.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.style.animation="trackmove linear 25s infinite";
    },2000);
    console.log("formula");
}
//when user click on mini
function minirun(mini)
{
    mini.children[0].children[0].style.animation="movingtire linear .01s infinite";      mini.children[1].children[0].style.animation="movingtire linear .01s infinite";
    mini.previousElementSibling.style.animation="trackmove linear 1.5s infinite";
    mini.previousElementSibling.previousElementSibling.style.animation="trackmove linear 1.5s infinite";
    mini.previousElementSibling.previousElementSibling.previousElementSibling.style.animation="trackmove linear 1.5s infinite";
    mini.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.style.animation="trackmove linear 1.5s infinite";
    mini.style.animation="minirun ease-in-out 15s 1";
    setTimeout(()=>
    {
        mini.children[0].children[0].style.animation="movingtire linear 5s infinite";
        mini.children[1].children[0].style.animation="movingtire linear 5s infinite";
        mini.style.animation="carshake linear 5s infinite";
        mini.previousElementSibling.style.animation="trackmove linear 150s infinite";
      mini.previousElementSibling.previousElementSibling.style.animation="trackmove linear 150s infinite";
      mini.previousElementSibling.previousElementSibling.previousElementSibling.style.animation="trackmove linear 150s infinite";
      mini.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.style.animation="trackmove linear 150s infinite";
    },15000);
    console.log("mini");
}
//user click on bike
function bikerun(bike)
{
    bike.style.animation="bikerun linear 5s 1";
    setTimeout(()=>
    {
        bike.style.animation="carshake linear .1s infinite";
    },5000);
    console.log("bike");
}