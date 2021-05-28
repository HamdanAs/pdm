const close = document.querySelector('#close');
const session = document.getElementById('session');

close.addEventListener('click', function(){
  session.style.display = 'none';
});