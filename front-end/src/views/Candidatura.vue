<template>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <div class="container">
      <article v-for="dado in dados" :key="dado.id">
        <h2>#{{ dado.id }} - {{ dado.name }}</h2>
        <p><b>Email: </b>{{ dado.email }}</p>
        <button @click="downloadCv(dado.path_cv)"><i class="fa-solid fa-file-arrow-down"></i> Baixar Curriculo</button>
        <a v-bind:href="dado.linkedin" target="_blank"><button><i class="fa-brands fa-linkedin"></i> Linkedin</button></a>
        <a v-bind:href="dado.portfolio" target="_blank"><button><i class="fa-brands fa-github"></i> GitHub</button></a>
      </article>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Candidatura",
  data(){
      return {
        dados: []
      }
  },
  mounted() {
    this.getCandidacies()
  },
  methods: {
    getCandidacies(){
      var th = this
      axios.get('http://127.0.0.1:8000/api/candidaturas')
      .then(function (response){
          th.dados = response.data
      })
      .catch(function (error){
        console.log(error)
      })
    },
    downloadCv(file){

      const cv = file.split('/')

      axios.get(`http://127.0.0.1:8000/api/download/${cv[1]}`, {responseType: 'blob'}).then(response => {
        const fileUrl = window.URL.createObjectURL(new Blob([response.data]))
        var fileLink = document.createElement('a')
        fileLink.href = fileUrl
        fileLink.setAttribute('download', cv[1])
        document.body.appendChild(fileLink)
        fileLink.click()
      }).catch(error => {
        console.log(error)
      })
    }
  }
}
</script>

<style scoped>
  .container{
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    justify-content: flex-start;
    background: #42b983;
    width: 100vw;
    min-height: 100vh;
  }
  article{
    background: white;
    width: 50vw;
    margin-top: 10px;
    padding: 10px;
    text-align: left;
    border-radius: 5px;
    margin-bottom: 10px;
  }
  button{
    padding: 10px;
    margin: 10px 5px;
    background: #42b983;
    border: 3px solid #42b983;
    border-radius: 4px;
    font-weight: bold;
    color: white;
    cursor: pointer;
  }

</style>