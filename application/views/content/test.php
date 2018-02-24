<div id='app'>
        <form>
             <label for="firstNumber"></label>
             <input type="text" id="firstNumber" v-model="firstNumber">
            <br/>
             <label for="secondNumber"></label>
            <input type="text" id="secondNumber" v-model="secondNumber">
            <br/>
             <label for="result"></label>
            <input type="text" id="result" v-model="result">
        </form>
</div>

<script>
    new Vue({
        el:'#app',
        data : {
                firstNumber : 0,
                secondNumber: 0
         },
        computed: {
                result: function(){
                    return this.firstNumber + this.secondNumber;
                }
            }
    });
</script>
