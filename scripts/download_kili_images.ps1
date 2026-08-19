$outdir = 'public/assets/kilimanjaro'
New-Item -ItemType Directory -Force -Path $outdir | Out-Null
$urls = @(
'https://www.landsavannahandtrekking.com/assets/images/job-kil34-676x451.jpg',
'https://www.landsavannahandtrekking.com/assets/images/moja-676x449.jpg',
'https://www.landsavannahandtrekking.com/assets/images/tina-124-706x419.jpeg',
'https://www.landsavannahandtrekking.com/assets/images/20170616-82335-676x380.jpeg',
'https://www.landsavannahandtrekking.com/assets/images/jnmg-676x369.jpg',
'https://www.landsavannahandtrekking.com/assets/images/mnkot-1-666x380.jpeg',
'https://www.landsavannahandtrekking.com/assets/images/kili-o5-676x451.jpg',
'https://www.landsavannahandtrekking.com/assets/images/job-kil34-1-676x451.jpg',
'https://www.landsavannahandtrekking.com/assets/images/kil5se-676x380.jpg'
)
foreach($u in $urls){
    $fn = Split-Path $u -Leaf
    try{
        Invoke-WebRequest $u -OutFile (Join-Path $outdir $fn) -UseBasicParsing -ErrorAction Stop
        Write-Output "Saved $fn"
    }catch{
        Write-Output "Failed $fn"
    }
}
Get-ChildItem $outdir | Select-Object Name
