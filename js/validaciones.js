 //Jair Efren Ortega Reyes

 //=============================================================================================================================
 //  Script para validar inputs cada input a validar debe tener la data-validation='tiposValidaciones' y un atributo 'name'
 //  también permite manejar el submit manualmente agregando -> data-form='true' en el form. 
//==============================================================================================================================


//==============================================================================================================================
//                          ARREGLO CON OBJETOS CADA OBJETO CORRESPONDE A UN TIPO DE VALIDACIÓN 
    
//   ATRIBUTOS:
//   name -> 'nombre de la validación misma que se debe agregar como valor del data-validation.'
//   inputs -> Arreglo vacio
//   methodValidation -> Función para validar hay 2 tipos una con Expresiones Regulares y otras sin Expresiones Regulares
//==============================================================================================================================
const tiposValidaciones = [
    { 
        name : 'only-words',
        inputs:[],
        methodValidation : (targetInput, $warn, estatusAnterior, required, displaywarnings)=>{ //Método cuando se usa una Expresión regular 
            if(estatusAnterior || estatusAnterior === null){
                let valueInput = targetInput.value
                let regExp = (/[0-9]/gim);//Expresión regular para validar --- Unicamente Cambiarla
            
                if(regExp.test(valueInput)){//VALIDATION
                    if(valueInput === "" && !required) return true;
    
                    if(valueInput==="" && required) return false;

                    if(displaywarnings || displaywarnings == undefined) displayWarn($warn, 'Ingrese solo caracteres No numericos', false, targetInput)//Mostrar el error
                    return false;

                }else if(!regExp.test(valueInput) && !required){
                    return true;
                }

            }else{
                return false
            }
            
            return true;//Cuando paso la validación
        }
    },
    {
        name : 'email',
        inputs:[],
        methodValidation : (targetInput, $warn, estatusAnterior, required, displaywarnings)=>{
            if(estatusAnterior || estatusAnterior === null){
                let valueInput = targetInput.value
                let regExp = (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i);//EXPRESION REGULAR PARA LA VALIDACIÓN DEL INPUT
                if(!regExp.test(valueInput)){//VALIDATION
                    if(valueInput === "" && !required) return true;
                    
                    if(valueInput === "" && required) return false;

                    if(displaywarnings || displaywarnings == undefined) displayWarn($warn, 'Ingrese un correo valido', false, targetInput);
                    return false;
                    
                }else if(regExp.test(valueInput) && !required){
                    return true;
                }
            }else{
                return false
            }

            return true;
        } 
    },
    {
        name : 'only-numbers',
        inputs:[],
        methodValidation : (targetInput, $warn, estatusAnterior, required, displaywarnings)=>{
            if(estatusAnterior || estatusAnterior === null){
                let valueInput = targetInput.value
                let regExp = (/^[0-9]+$/gim);
                if(!regExp.test(valueInput)){//VALIDATION
                    if(valueInput === "" && !required) return true;
                    
                    if(valueInput === "" && required) return false;

                    if(displaywarnings || displaywarnings == undefined) displayWarn($warn, 'Ingrese solo caracteres numericos', false, targetInput)
                    return false;
                    
                }else if(regExp.test(valueInput) && !required){
                    return true;
                }
            }else{
                return false
            }

            return true;
        }      
    },
    {
        name : 'required',
        inputs:[],
        methodValidation:(targetInput, $warn, estatusAnterior, required, displaywarnings)=>{//Método cuando no se usa un Expresion Regular
            if(estatusAnterior || estatusAnterior === null){
                let valueInput = targetInput.value
                if(valueInput===""){//VALIDATION --- Unicamente Cambiarla
                    if(displaywarnings || displaywarnings == undefined){displayWarn($warn, '*Campo Obligatorio', false, targetInput)}
                    return false;
                }
            }else{
                return false;
            }
            return true;
        }
    },
    {
        name : 'maxLength-',
        inputs:[],
        methodValidation:(targetInput, $warn, estatusAnterior, required, displaywarnings)=>{
            if(estatusAnterior || estatusAnterior === null){
                let valueInput = targetInput.value
                let range = ((Array.from(targetInput.dataset.validation.split(" ")).filter(dataAttr => dataAttr.includes('maxLength-')))[0]).slice(10);
                if(valueInput.length > range){//VALIDATION                
                    if(displaywarnings || displaywarnings == undefined) displayWarn($warn, `Ingrese un max de ${range} caracteres`, false, targetInput)     
                    return false;                    
                }
            }else{
                return false;
            }
            return true;
        }    
    }
]


//ESTE MÉTODO COMPARA EL DATA-VALIDATION CON LA PROPIEDAD NOMBRE DEL LOS OBJETOS DEL ARREGLO 'tiposValidaciones' 
function exists(dataAttribute, $input){  
    let flag = false;  
    if(dataAttribute !== 'required'){
        dataAttribute.forEach(el=>{
            tiposValidaciones.forEach(obj =>{        
                if(el.includes(obj.name)){ 
                    obj.inputs.push($input)
                }            
            })
        })
    }else{
        tiposValidaciones.forEach(obj =>{    
            if(((/required/i).test($input.dataset.validation))){ 
                flag = true;
            }            
        })
    }
    
    return flag
}

//FUNCIÓN PARA CREAR LOS SPANS PARA CADA INPUT, LOS CUALES SERAN PARA MOSTRAR EL ERROR DE VALIDACION
const createwarnings = ($inputs) =>{
    $inputs.forEach(input =>{
        const $span = document.createElement('span')
        $span.textContent = "Mensaje de Advertencia"
        $span.classList.add(input.name, 'd-none', 'text-danger', 'mb-1', 'fw-bold')
        input.insertAdjacentElement('afterend', $span)
    })
}

//FUNCIÓN PARA REALIZAR CAMBIOS DE ESTILOS EN LOS INPUTS SEGÚN EL RESULTADO DE VALIDACIÓN
const displayWarn = ($warn, message, status, input)=>{
        let band = null //Indicara el resultado de la anterior validacion del mismo input.

        if(Array.from(input.classList).includes('border-danger')){
            band = 1 //No paso la validación           
        }else if(Array.from(input.classList).includes('border-success')){
            band = 0 //Si paso la validación    
        }
        
        if(band === 1 && status){ //Validación Actual Correcta
            input.classList.replace('border-danger', 'border-success');
            $warn.classList.add('d-none');
    
        }else if(band === 0 && status===false){//Validación Actual Incorrecta
            input.classList.replace('border-success', 'border-danger');
            $warn.classList.remove('d-none');//Se muestra el error
            $warn.textContent = message//Se define el mensaje de error de $warn
    
        }else if(band === 1 && status===false){//Validación Actual Otra vez fue Incorrecta
            $warn.classList.remove('d-none');
            $warn.textContent = message
        }
    
    
        //band es null es decir que aun no se ha validado ese input
        if(band === null && status){//Validación Correcta
            input.classList.add('border-success', 'border-2')
    
        }else if(band === null && status === false){//Validación Incorrecta
            input.classList.add('border-danger', 'border-2')
            $warn.classList.remove('d-none');
            $warn.textContent = message
        }
    
}

//FUNCIÓN PARA RECUPERAR LAS POSICIONES QUE OCUPAN LOS TIPOS DE VALIDACIONES DENTRO DEL ARREGLO 'tiposValidaciones
const getPosition = (types, tiposValidaciones)=>{
    let index = [];
    tiposValidaciones.forEach((obj, position)=>{
        if(types !== 'required'){
            types.forEach((type)=>{
                if(obj.name === type){
                    index.push(position);
                }            
            })
        }else{
            if(obj.name === types){
                index.push(position);
            }  
        }
    })

    return index //Devuleve la posicion
}

//FUNCIÓN ENCARGADA DE LLAMAR A LAS VALIDACIONES ASIGNADAS A LOS DIFERENTES INPUTS
const validar = (res, regExp, e, displaywarnings)=>{
    try{
        if(e.dataset.validation){ //Unicamente aplicar a los elemento con data-validation
            res = []//Almacenara los resultados de las validaciones
            let count = 0;
            const DATAVALIDATION = {//Objeto que ayudara a recuperar info necesaria según los tipos de validaciones del input
                type: e.dataset.validation.split(" "),
                getPositionOfValidationType : function(){ return getPosition(this.type, tiposValidaciones)}                
            }
        
            const $warn = document.querySelector(`.${e.name}`)//Acceder al <span> del input
            let required = ((/required/gm).test(e.dataset.validation));//Verificar si input es requerido  
            try{
                DATAVALIDATION.getPositionOfValidationType().forEach((position, interval)=>{//Ejecutar cuantos tipos de validaciones tenga el input
                    let methodValidation = tiposValidaciones[position].methodValidation(e, $warn, null, required, displaywarnings)//Método cuando es la primera validación
                    let methodValidationWithResultadoAnterior = tiposValidaciones[position].methodValidation(e, $warn, res[count], required, displaywarnings)//Método cuando no es la primera validación
                    let typeValidation = tiposValidaciones[position].name;//Acceder al tipo de validación actual
                    
                    res.push((interval==0)?methodValidation:methodValidationWithResultadoAnterior)
                    
                    //Obtener que otros tipos de validaciones tiene el mismo input y aplicarlas
                    tiposValidaciones.forEach((obj) =>{
                        regExp = RegExp(obj.name, "gmi")
                        if((regExp.test(e.dataset.validation)) && (obj.name !== typeValidation)){    
                            res.push(obj.methodValidation(e, $warn, res[count], null, displaywarnings))                        
                            count++//Para recorrer el arreglo res[] y obtener la respuesta de la validacion anterior
                        }                            
                    }) 

                })
                
            }catch(e){
                console.error(`Error: Posiblemente aun no ha realizado algún método para una validación en el arreglo tiposValidaciones ubicada en la linea 32 aprox. --- ${e}`)
            }

            //Si el ultimo valor del res[] es true significa que el input paso todas sus validaciones
            if(res[res.length-1]){displayWarn($warn, 'Validación Correcta', true, e)}
        }
    }catch(e){
        console.error(`Error: ${e}`)
    }
}

//FUNCIÓN ENCARGADA DE COMPROBAR QUE LOS INPUTS YA ESTEN VALIDADOS ESTO PARA EL SUBMIT
const validarSubmit = (res, regExp, e, inputs, displaywarnings)=>{
    res = []
    inputs.forEach(input=>{
        if(e===null){e=input}
        let count = 0;

        const DATAVALIDATION = {//Objeto que ayudara a recuperar info necesaria según los tipos de validaciones del input
            type: 'required',
            getPositionOfValidationType : function(){ return getPosition(this.type, tiposValidaciones)}                
        }
    
        const $warn = document.querySelector(`.${e.name}`)//Acceder al <span> del input
        let required = ((/required/gm).test(e.dataset.validation));//Verificar si input es requerido  
        if(exists(DATAVALIDATION.type, e)) res.push(tiposValidaciones[DATAVALIDATION.getPositionOfValidationType()].methodValidation(e, $warn, null, null, displaywarnings));

        e=null;
    })

    let resFilter = res.filter(resultado => resultado === true)

    if(resFilter.length !== res.length){
        return false;
    }
    
    return true;
}

//FUNCIÓN PARA MANEJAR EL SUBMIT CON AJAX ARA ENVIAR DATA, EJECUTAR PHP Y RECIBIR RESPUESTA JSON
const manejarSubmit = ($alertStatus, e, url)=>{
    e.preventDefault();
    document.querySelector('.loader').classList.remove('d-none')


    //IMPLEMENTAR AJAX PARA ENVIAR DATA, EJECUTAR PHP Y RECIBIR RESPUESTA JSON
    let settings = {
        method : "POST", 
        body : new FormData(e.target),//Enviar el Formulario al guardarPelicula.php
        mode : "cors" //Para evitar ser bloqueados por CORS cabe destacar que del lado del servidor también se deben agregar cabeceras para evitar ser bloqueados por cors
    }          

    fetch(`${e.target.action}`, settings)
    .then(res => res.ok?res.json():Promise.reject(res))
    .then(json =>{//Se recibe respuesta del php
       
        document.querySelector('.loader').classList.add('d-none')//Cargar una animación de "cargando"
        $alertStatus.textContent = json.message//Obtener el mensaje de la alerta                
        
        let Redirigiendo = null;

        //Seleccionar el tipo de alerta Error o Exitoso
        if(json.err){$alertStatus.classList.add('alert', 'alert-danger')
        }else if(!json.err){    
            $alertStatus.classList.add('alert', 'alert-success'); e.target.reset()
            $alertStatus.textContent += '. Redirigiendo'
            let count = 0;
            Redirigiendo = setInterval(()=>{                       
                $alertStatus.textContent += '.';
            }, 500)
        }
        
        $alertStatus.classList.remove('d-none')
        
        setTimeout(()=>{//Ocultar alerta a los 2.5seg                
            if(!json.err) window.location.href = url;  
            if(json.err) $alertStatus.classList.add('d-none')
        }, 2000)

        setTimeout(()=>{  
            if(!json.err) clearInterval(Redirigiendo);  
        }, 3000)


    })
    .catch(err=>{
        console.log(err)
    })
}

export default function(){
    const $inputs =  document.querySelectorAll('[data-validation]');

    createwarnings($inputs)

    //Catalogar a cada input dentro de un objeto del arreglo 'tiposValidaciones' según el tipo de 'data-validation' que tenga
    $inputs.forEach($input =>{
        let dataAttribute = Object.values({...$input.dataset.validation.split(' ')})
        exists(dataAttribute, $input)
    })

    let res=[], regExp = null;
    
    //========================================================
    //  EVENTO PARA VALIDAR MIENTRAS SE INGRESA TEXTO AL INPUT 
    //========================================================
    document.addEventListener('keyup', e=>{
        validar(res, regExp, e.target, true)  //Parametro 4. Mostrar o No Mostrar el Error de validación (opcional)
    })

    //======================================================================
    //  EVENTO PARA VALIDAR CUANDO SE PRODUCE UN CAMBIO EN UN INPUT O SELECT 
    //======================================================================
    document.addEventListener('change', e=>{
        validar(res, regExp, e.target)
    })
    

    //===================================================================================================
    //  EVENTO PARA VALIDAR CUANDO SE ENVIA UN FORMULARIO REQUIERE EL DATA ATTRIBUTE --> data-form='true'
    //===================================================================================================

    //Alerta de Error al enviar formulario
    const $errorSubmit = document.createElement('span');
    $errorSubmit.classList.add('mb-2', 'text-danger', 'fw-bold', 'text-end', 'd-none')

    //Alerta de Confirmación de registro y actualización
    const $alertStatus = document.createElement('div');
    $alertStatus.classList.add('alert' ,'mt-2', 'd-none')
    document.querySelector('.container').appendChild($alertStatus)


    document.addEventListener('submit', e=>{
        if(e.target.dataset.form === 'true'){
            e.preventDefault()
            document.getElementById('band').value = "1";//Servira como señal para el .php de que el submit se manejara con AJAX
            if(document.querySelector('.border-danger') || !validarSubmit(res, regExp, null, $inputs, false)){
                $errorSubmit.textContent = "Verifica o Ingresa los datos";
                $errorSubmit.classList.remove('d-none')
                document.querySelector('[data-warn]').insertAdjacentElement('beforebegin', $errorSubmit)
            }else{
                manejarSubmit($alertStatus, e, 'peliculas.php');//Para manejar manualmente el comportamiento del Submit
            }
        }
    })
}