#Autor: WALTER REYES
#Fecha: 2007-10-04
#Este script lo que hace es dividir la data de Inválidos en 5 grupos para su procesamiento
#Se ejecuta de la sgte manera- ejemplo "xdivide_data_invalidos_final.sh 200805 200806"

grep '^..........................................'$1'01' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >  /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_1.TXT
grep '^..........................................'$1'02' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_1.TXT
grep '^..........................................'$1'03' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_1.TXT
grep '^..........................................'$1'04' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_1.TXT
grep '^..........................................'$1'05' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_1.TXT
grep '^..........................................'$1'06' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_1.TXT
grep '^..........................................'$1'07' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_1.TXT
grep '^..........................................'$1'08' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_1.TXT
grep '^..........................................'$1'09' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_1.TXT

grep '^..........................................'$1'10' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >  /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_2.TXT
grep '^..........................................'$1'11' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_2.TXT
grep '^..........................................'$1'12' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_2.TXT
grep '^..........................................'$1'13' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_2.TXT
grep '^..........................................'$1'14' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_2.TXT
grep '^..........................................'$1'15' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_2.TXT
grep '^..........................................'$1'16' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_2.TXT
grep '^..........................................'$1'17' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_2.TXT
grep '^..........................................'$1'18' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_2.TXT

grep '^..........................................'$1'19' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >  /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_3.TXT
grep '^..........................................'$1'20' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_3.TXT
grep '^..........................................'$1'21' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_3.TXT
grep '^..........................................'$1'22' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_3.TXT
grep '^..........................................'$1'23' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_3.TXT
grep '^..........................................'$1'24' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_3.TXT

grep '^..........................................'$1'25' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >  /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_4.TXT
grep '^..........................................'$1'26' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_4.TXT
grep '^..........................................'$1'27' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_4.TXT
grep '^..........................................'$1'28' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_4.TXT
grep '^..........................................'$1'29' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_4.TXT
grep '^..........................................'$1'30' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_4.TXT
grep '^..........................................'$1'31' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT >> /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1_4.TXT

grep '^..........................................'$2'' /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$1.TXT > /home1/sigma/pre_unif/invalidos/$1'_1'/xINVA_$2_INICIAL.TXT

exit;
