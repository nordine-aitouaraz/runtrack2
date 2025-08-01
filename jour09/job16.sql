SELECT etages.nom AS nom_etages, salles.nom AS "Biggest Room", salles.capacity 
FROM salles 
JOIN etages ON salles.etages_id = etages.id 
ORDER BY salles.capacity DESC 
LIMIT 1;