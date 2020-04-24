<?php
namespace Codecademy;

function whatRelation ($percentSharedDNA)
{
 if ($percentSharedDNA === 100){
   echo "identical twins";
 } elseif ($percentSharedDNA > 34){
   echo "parent and child or full siblings";
 } elseif ($percentSharedDNA > 13){
   echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
 }  elseif ($percentSharedDNA > 5) {
   echo "first cousins";
 } elseif ($percentSharedDNA > 2){
   echo "second cousins";
 } elseif ($percentSharedDNA > 0){
   echo "third cousins";
 } else {
   echo "not genetically related";
 }
}

whatRelation(100);
echo "\n\n";
whatRelation(56);
echo "\n\n";
whatRelation(18);
echo "\n\n";
whatRelation(10);
echo "\n\n";
whatRelation(3);
echo "\n\n";
whatRelation(1);
