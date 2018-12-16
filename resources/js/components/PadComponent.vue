<template>
  <div class="center">
       <!--la raqueta donde tiene estilos y la posición que se le asigna desde tablero.-->
       <div :style="'height: 200px; width: 50px; border: 3px solid white; margin-left: ' +positionx + 'px; margin-top: ' +position + 'px;' "></div>



   </div>

</template>

<script>
      export default {
        data(){
            return{
             positionx:0,
            }
        },
        /*las variables que le esta llegando desde tablero que es lado y la posición en y, side= lado y position = posición */
        props: ["side","position"],
        mounted() {
            this.goPage();
        },
        methods: {
            goPage(){
            	/* si el lado esta en izquierda su positionx=100 en caso contrario el otro lado derecho seria positionx=1200, la distancia en x.*/
            	if(this.side=="left"){
            		this.positionx=100;
            	}else{
            		this.positionx=1200;
            	}      
         	},
        }
    }
</script>
