import app from './api.js';

const d = document,
$body_table = d.querySelector('#body_table');

const viewData = (data) => {}

const fethData = async() => {
  try {
    const data = await app('./controller.php?data_user=1');
  } catch (error) {
    
  }
}

if($body_table){
  //
}

const insertData = async (data) => {
  // POST
  app("./controller.php?insert_user=1",'POST', data)
  .then(data => console.log(data))
  .catch(error => console.error('Error en POST:', error));
};

d.addEventListener('submit', e => {
  e.preventDefault();

  const name = e.target.name.value;
  const last_name = e.target.last_name.value;

  if(name.length === 0){
    alert('Please enter your name');
    return;
  }

  if(last_name.length === 0){
    alert('Please enter your last name');
    return;
  }

  const formData = new FormData();
  formData.append('name',name);
  formData.append('lastname',last_name);

  insertData(formData);
});