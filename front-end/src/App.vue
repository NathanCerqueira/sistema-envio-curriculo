<template>
  <div id="nav">
    <router-link to="/">Candidaturas</router-link> |
    <router-link to="/trabalhe-conosco">Trabalhe Conosco</router-link>
  </div>
  <router-view/>
</template>

<style>
*{
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}
::-webkit-scrollbar{
  width: 5px;
}
::-webkit-scrollbar-thumb{
  background: #42b983;
  margin: 50px;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
