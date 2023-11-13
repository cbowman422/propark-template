
let active = false;
let mainServicesButton1 = document.getElementById('mainServicesButton1');
let mainServicesButton2 = document.getElementById('mainServicesButton2');
let mainServicesButton3 = document.getElementById('mainServicesButton3');

mainServicesButton1.addEventListener('click', updateServices1());
mainServicesButton2.addEventListener('click', updateServices2);
mainServicesButton3.addEventListener('click', updateServices3);


function toggleMenu(){
  active = !active;
  let menu = document.getElementById('menu');
  let hamburger = document.getElementById('hamburger');

  if (active){
    menu.classList.add('active');
    hamburger.classList.add('active');
  } else {
    menu.classList.remove('active');
    hamburger.classList.remove('active');
  }
};

function updateServices1(){
  servicesInfo("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeuLh5RyUR6FDYZi9MQeD7RoQfU90cY67quA&usqp=CAU","Shuttle Transportation","Our transportation services are diverse and tailored to your needs, offering a range of employer shuttle sizes, from single vehicles on a five-day workweek to 24/7 availability. In non-emergency medical transportation, our suite includes courtesy, patient, and medical center parking shuttles.");
}

function updateServices2(){
  servicesInfo("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeuLh5RyUR6FDYZi9MQeD7RoQfU90cY67quA&usqp=CAU","Parking Management","Our Parking Management are diverse and tailored to your needs, offering a range of employer shuttle sizes, from single vehicles on a five-day workweek to 24/7 availability. In non-emergency medical transportation, our suite includes courtesy, patient, and medical center parking shuttles.");
}

function updateServices3(){
  servicesInfo("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeuLh5RyUR6FDYZi9MQeD7RoQfU90cY67quA&usqp=CAU","Event Parking","Our Event Parking services are diverse and tailored to your needs, offering a range of employer shuttle sizes, from single vehicles on a five-day workweek to 24/7 availability. In non-emergency medical transportation, our suite includes courtesy, patient, and medical center parking shuttles.");
}

function servicesInfo(servicesImage, servicesName, servicesText){
  document.getElementById("main-services-img").src = servicesImage;
  document.getElementById("main-services-h3").innerHTML = servicesName;
  document.getElementById("main-services-p").innerHTML = servicesText;
}
