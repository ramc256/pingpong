<template>
   <div class="row">
    <div class="col-md-12 float-left">
      <h3 class="float-left" style="color: white" for="">{{ player1 }}</h3>
    </div>
    <div class="col-md-12 float-right">
      <h3 class="float-right" style="color: white" for="">{{ player2 }}</h3>
    </div>
    <div class="row col-md-12">

    <!-- componentes de la caraqueta PAD -->
       <pad-component side='left' :position='this.position'> </pad-component>
       <pad-component side='right' :position='this.position2'> </pad-component>
    </div>
     <modal v-if="showModal" @close="showModal = false">
            <h3 slot="header">Ingreso el nombre de los jugadores</h3>
            <div slot="body">
                <div class="col-md-12">
                  <label for="">Ingrese el nombre del jugador 1</label>
                  <input type="text" v-model="player1">
                </div>
                <div class="class col-md-12">
                  <label for="">Ingrese el nombre del jugador 2</label>
                  <input type="text" v-model="player2">
                </div>
            </div>
            <div slot="footer" class="col-md-6">
                <div class="form-group col-md-6 float-right">
                    <button class="btn btn-block btn-primary" @click="closeModal">
                        <i class="fa fa-check-square"></i>Ok
                    </button>
                </div>
            </div>
        </modal>
         <div class="float-center" style="margin-left: 50%; margin-top: 15%; position: absolute; z-index: 1"> <i class="fa fa-futbol-o fa-5x" aria-hidden="true" style="color: white"> </i>
        </div>
   </div>


</template>

<script>
      export default {
        data(){
            return{
              // la variable position esta ubicado en el eje de las 'y'
             position:100,
             position2:100,
             showModal: true,
             player1: 'jugador 1',
             player2: 'jugador 2',
            }
        },
        created(){
          /* e es el evento del teclado,  el juagador1=1, y jugardor2= 2 */
          window.addEventListener('keydown', (e) => { 
            
                // mueve hacia arriba 'w' para jugador 1 
                if (e.key == 'w' && this.position > 20) {
                  this.moveUp(1);
                }
                // mueve hacia arriba con flecha hacia arriba para el juagador 2
                if (e.key == 'ArrowUp' && this.position2 > 20) { 
                  this.moveUp(2);
                }
            
              // mueve hacia abajo con 's' para el jugador 1
              if (e.key == 's' && this.position < 350) {
                this.moveDown(1);
              }
              // mueve hacia abajo con la flecha hacia abajo para el juagador 2
              if (e.key == 'ArrowDown' && this.position2 < 350) { 
                this.moveDown(2);
              }
            
          });
        },
       
        methods: {

            moveUp(pad){ 
              if(pad==1){
                this.position = this.position - 10; 
              }else{
                 this.position2 = this.position2 - 10;
              }
            },
            moveDown(pad){
              if(pad==1){
                this.position = this.position + 10; 
              }else{
                this.position2 = this.position2 + 10; 
              }
              
            },
            closeModal(){
              this.showModal=false;
              
            },
        }
    }
</script>