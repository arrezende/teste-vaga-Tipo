<!--############################
## PÁGINAS INSTITUCIONAIS ##
############################-->
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.oncopatas.com.br"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "<?=$title?>",
    "item": "https://www.oncopatas.com.br/<?=$activePage?>"  
  }]
}
</script>


<!--##################################
## PÁGINAS DE PRODUTOS/SERVIÇOS ##
##################################-->

<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://www.oncopatas.com.br"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Especialidades",
    "item": "https://www.oncopatas.com.br/especialidades"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "<?=$title;?>",
    "item": "https://www.oncopatas.com.br/<?=$activePage?>"  
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "<?=$title?>",
  "image": "",
  "description": "<?=$description?>",
  "brand": {
    "@type": "Brand",
    "name": "Oncopatas"
  }
}
</script>