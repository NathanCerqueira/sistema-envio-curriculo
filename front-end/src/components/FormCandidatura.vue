<template>
  <div class="container-form">
    
    <form @submit.prevent="enviarCandidatura" enctype="multipart/form-data">
      <h1>Trabalhe Conosco</h1>
      <input type="text" v-model="name" name="name" id="name" placeholder="Nome completo">
      <span v-if="v$.name.$error">
          {{ v$.name.$errors[0].$message }}
      </span>
      <input type="email" v-model="email" name="email" id="email" placeholder="Email">
      <span v-if="v$.name.$error">
          {{ v$.email.$errors[0].$message }}
      </span>
      <input type="tel" v-model="phone" name="phone" id="phone" placeholder="Telefone">
      <span v-if="v$.name.$error">
          {{ v$.phone.$errors[0].$message }}
      </span>
      <input type="url"  v-model="portfolio"  name="portfolio" id="portfolio" placeholder="Portifólio">
      <span v-if="v$.name.$error">
          {{ v$.portfolio.$errors[0].$message }}
      </span>
      <input type="url" v-model="linkedin"  name="linkedin" id="linkedin" placeholder="Linkedin">
      <span v-if="v$.name.$error">
          {{ v$.linkedin.$errors[0].$message }}
      </span>
      <label for="file">Anexar Curriculo*</label>
      <input type="file" @change="getFile" id="file" accept=".pdf">
      <button type="submit">Enviar</button>

    </form>
  </div>
</template>

<script>

import axios from 'axios'
import alert from 'sweetalert2'
import useVuelidate from '@vuelidate/core'
import {required, email, url, maxLength, helpers} from '@vuelidate/validators'

export default {
  name: "FormCandidatura",
  setup(){
    return {v$: useVuelidate()}
  },
  data(){
    return{
        name: null,
        email: null,
        phone: null,
        portfolio: null,
        linkedin: null,
        file: null
    }
  },
  methods: {
    enviarCandidatura() {

      this.v$.$validate()

      if (!this.v$.$error){
        const payload = new FormData()
        payload.append('name', this.name)
        payload.append('email', this.email)
        payload.append('phone', this.phone)
        payload.append('portfolio', this.portfolio)
        payload.append('linkedin', this.linkedin)
        payload.append('file', this.file)

        axios.post('http://127.0.0.1:8000/api/enviar', payload, {headers:{
            'Content-Type': 'multipart/form-data'
          }})
            .then(response => {
              this.showAlertSucess(response.data['Sucesso'])
            })
            .catch(function (){
              this.showAlertError()
            });
      }

      console.log(this.v$.phone.$errors)

    },
    getFile(e) {
        this.file = e.target.files[0]
    },
    showAlertSucess(text)
    {
      alert.fire({
        icon: 'success',
        confirmButtonColor: '#42b983',
        title: 'Boa sorte!',
        text: text
      })
    },
    showAlertError()
    {
      alert.fire({
        icon: 'error',
        title: 'Oooops!',
        text: 'Não foi possiver realizar sua candidadura, Tente novamente.',
        showConfirmButton: false,
        showDenyButton: true,
        denyButtonText: 'Ok'
      })
    }
  },
  validations(){
    return{
      name: {
        required: helpers.withMessage('O nome é obrigatório!', required)
      },
      email:{
        required: helpers.withMessage('O e-mail é obrigatório!', required),
        email: helpers.withMessage('E-mail inválido!', email)
      },
      phone: {
        required: helpers.withMessage('O telefone  obrigatório', required),
        max: maxLength(11)
      },
      portfolio: {
        url : helpers.withMessage('URL inválida', url)
      },
      linkedin: {
        required : helpers.withMessage('o linkedin é obrigatório', required),
        url: helpers.withMessage('URL inválida', url)
      }
    }
  }
}
</script>

<style scoped>
.container-form{
  position: fixed;
  width: 100vw;
  height: 100vh;
  background: #42b983;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
h1 {
  text-align: left;
  margin: 10px;
  padding: 5px;
}
form{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 40vw;
  padding: 5px;
  margin: 10px;
  border-radius: 5px;
  background: white;
}
label{
  font-size: 18px;
  padding-right: 300px;
  padding-top: 10px;
}
input{
  width: 90%;
  height: 5vh;
  padding: 5px;
  margin: 5px;
  font-size: 20px;
  border: 3px solid #42b983;
  border-radius: 4px;
}
button{
  width: 90%;
  height: 5vh;
  margin: 10px;
  padding: 5px;
  font-size: 25px;
  background: #42b983;
  border: 3px solid #42b983;
  border-radius: 4px;
  font-weight: bold;
  color: white;
  cursor: pointer;
}
button:hover{
  background: white;
  border: 3px solid #42b983;
  color: #42b983;
  transition: 1s;
}
input:focus{
  box-shadow: 5px 5px #42b983;
  transition: 1s;
  outline: none;
}
input[type='file']{
  border: 0;
  outline: 0;
  box-shadow: none;
}

@media (max-width: 820px) {
   form{
     width: 90%;
   }
   label{
     padding-left: 50px;
     color: blue;
   }
}
</style>