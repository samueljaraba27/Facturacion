const d = document,
  URL_USERS = '../login',
  PATH_HOME = location.pathname.replace('facturacion.test/', '');

function auth() {
  if (sessionStorage.getItem('user')) location.pathname = PATH_HOME;
  d.addEventListener('submit', async (e) => {
    e.preventDefault();
    if (e.target.matches('#frm-login')) {
      try {
        let res = await fetch(URL_USERS, {
           /*  headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }, */
          method: 'POST',
          body: appendForm({
            form: d.createElement('form'),
            username: d.getElementById('username').value,
            password: MD5(d.getElementById('password').value.toUpperCase()),
            mode: 'login'
          })
        });
        if (!res.ok) throw new Error(`Error, status: ${res.status}`);
        let user = await res.json();
        login(user);
      } catch (e) {
        console.log(e);
      }
    }
  });
}

d.addEventListener('DOMContentLoaded', (e) => {
  auth();
  //d.querySelector('main').classList.remove('hidden');
});

function MD5(str) {
  return CryptoJS.MD5(CryptoJS.MD5('P0S2') + CryptoJS.MD5(str)).toString();
}

function login(user) {
  if (!user) {
    Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 1500
    }).fire({
      icon: 'error',
      title: 'Usuario y/o contraseña inválidos'
    });
    return;
  } else {
    user.ID = btoa(user.ID);
    sessionStorage.setItem('user', JSON.stringify(user));
    location.pathname = PATH_HOME;
  }
}

function appendForm(values) {
  let formdata = new FormData(values.form);
  for (const key in values) {
    formdata.append(key, values[key]);
  }
  return formdata;
}
