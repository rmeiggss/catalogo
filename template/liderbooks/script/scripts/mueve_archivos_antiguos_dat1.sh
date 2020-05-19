# programa para mover de un directorio los ficheros mas viejos
# ejecutar como ejemplo "mueve_archivos_antiguos_dat1.sh /home1/sigma/dat/ 90"

case $# in

0) echo "Falta argumentos, debe ponerse el directorio y la cantidad de d¡as"

exit 1;;

1) echo "Falta 1 argumento, debe ponerse el directorio y la cantidad de d¡as"

exit 1;;

esac

cd $1
find . -name "*.*.DAT" -type f -mtime +$2 -exec ls {} \; > salida.txt
cant=`cat salida.txt | wc -l`
cont=1
while [ $cont -le $cant ] ; do
      arch=`head -$cont salida.txt | tail -1`
      mv $arch /home1/sigma/dat/tmp_wwrl/
      compress -v /home1/sigma/dat/tmp_wwrl/$arch
      cont=`expr $cont + 1`;
done
#cd $1
#cd tmp
#compress -v *.log
#cd $1
rm salida.txt
