<template>
  <div class="container-form">
    <form>
      {{ file }}
      <h1>Trabalhe Conosco</h1>
      <input type="text" v-model="name" name="name" id="name" placeholder="Nome completo">
      <input type="email" v-model="email" name="email" id="email" placeholder="Email">
      <input type="tel" v-model="phone" name="phone" id="phone" placeholder="Telefone">
      <input type="url" v-model="portfolio" name="portfolio" id="portfolio" placeholder="Portifólio">
      <input type="url" v-model="linkedin" name="linkedin" id="linkedin" placeholder="Linkedin">
      <label for="file">Anexar Curriculo*</label>
      <input type="file" v-on:change="file" name="file" id="file">
      <button type="submit">Enviar</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "FormCandidatura",
  data(){
    return{
      name: null,
      email: null,
      phone: null,
      portfolio: null,
      linkedin: null,
      file: null
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
</style>