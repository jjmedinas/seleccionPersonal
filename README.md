# Seleccion de Personal utilizando Logica Difusa

La aplicación se basa en la utilizacion de la logica difusa para realizar la seleccion del personal <br/>
mas idóneo para determinada empresa, teniendo en cuenta ciertos criterios definidos por la misma.<br/>

#Un poco de teoria...
<p> En la teoria de conjuntos tradicional, un elemento sólo tiene dos estados frente a 
determinado conjunto: pertenecer o  no pertencer a éste.<br>
Por ejemplo el numero tres (3) pertenece al conjunto de múmeros impares y NO pertenece al conjunto de numeros pares. <br><p>

<p>Ahora analicemos otro ejemplo: <br>
Consideremos dos conjuntos: <br>
1- Personas Jovenes: quienes tienen entre 15 a 25 años <br>
2- Personas Adultos: quienes tienen entre 20 a 30 años <br>

Teniendo en cuenta eso: Una persona de 25 años, ¿Seria joven o adulta? <br>
Si nos basamos en el primer ejemplo pertenecería a ambos conjuntos, pero ésto es un poco inexacto para fines analíticos.<br>

<p>Para ser mas exactos y realizar una representacion mas fiel a la realidad, se hace necesario cambiar un poco<br>
este principio de "pertenencia  o no pertenencia" e introducir el concepto de "cierto grado de pertenencia a:".<br>
Entonces, una persona de 25 años sería un adulto joven. Tendría cierto grado de pertenecia a ambos conjuntos, <br>
aunque pertenecería mas al conjunto de adultos que al de jovenes.<p>

<p>Este es el principio que se utiliza en la aplicacion para realizar la seleccion de personal en  las empresas.<br>
Primero se definen criterios como responsabilidad, puntualidad, trabajo en grupo, disciplina y demás que la empresa considere <br>
necesarios; luego se define el grado de pertenencia que cada participante posee ante cada criterio, teniendo que 1 es <br>
el mayor grado de pertenencia y 0.1 el menor (Por ejemplo si una personas siempre es puntal tendría un grado de pertenencia 1, mientras<br>
que si una persona por lo general llega tarde, tendría tendría un grado de pertenencia menor de 0.5). <br>
Luego se establecen los valores de referencia, que son "los grados de pertenencia ideales" que busca la empresa en los aspirantes.<br>
Por último la aplicacion se encarga de calcular el perfil del aspirante que mas se asemeje a los valores de referencia.
</p>

#Tener en cuenta...<br>
<p>-Para utilizar correctamente la aplicacion, es necesario seguir las instrucciones que estan en la seccion "Ayuda".<p>
<p>-Si existen algunas dudas con la estructura que tiene que tener el archivo con los datos de los aspirantes y la empresa,<br>
se puede descargar [este archivo] (ejemplo/datos.txt), o copiar y guardar su contenido en un archivo de texto plano (.txt).


#Para probar la aplicacion, dé clic en el siguiente link:

#[Preview] (http://seleccion-personal.juan-medina.xyz/)<br>
