const app = new Vue({
    el:"#app",

    data: {
        albums:null,
    },

    mounted(){
        axios
        .get("api/disks.php")
        .then(resp =>{
            console.log(resp);
            this.albums = resp.data
        })
        .catch(e =>{
            console.log(e);
        })
    },

})