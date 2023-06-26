<?php

$cities = [
    "Berlin",
    "Hamburg",
    "Munich (München)",
    "Cologne (Köln)",
    "Frankfurt",
    "Stuttgart",
    "Düsseldorf",
    "Dortmund",
    "Essen",
    "Leipzig",
    "Bremen",
    "Dresden",
    "Hanover (Hannover)",
    "Nuremberg (Nürnberg)",
    "Duisburg",
    "Bochum",
    "Wuppertal",
    "Bielefeld",
    "Bonn",
    "Mannheim",
    "Karlsruhe",
    "Münster",
    "Wiesbaden",
    "Gelsenkirchen",
    "Augsburg",
    "Mönchengladbach",
    "Aachen",
    "Chemnitz",
    "Braunschweig",
    "Kiel",
    "Krefeld",
    "Halle",
    "Magdeburg",
    "Freiburg",
    "Oberhausen",
    "Lübeck",
    "Erfurt",
    "Rostock",
    "Mainz",
    "Kassel",
    "Hagen",
    "Hamm",
    "Saarbrücken",
    "Mühlheim an der Ruhr",
    "Potsdam",
    "Ludwigshafen",
    "Oldenburg",
    "Leverkusen",
    "Osnabrück",
    "Solingen",
    "Heidelberg",
    "Herne",
    "Neuss",
    "Darmstadt",
    "Paderborn",
    "Regensburg",
    "Ingolstadt",
    "Würzburg",
    "Fürth",
    "Wolfsburg",
    "Offenbach",
    "Ulm",
    "Heilbronn",
    "Pforzheim",
    "Göttingen",
    "Bottrop",
    "Recklinghausen",
    "Reutlingen",
    "Koblenz",
    "Bremerhaven",
    "Bergisch Gladbach",
    "Jena",
    "Remscheid",
    "Erlangen",
    "Trier",
    "Moers",
    "Salzgitter",
    "Siegen",
    "Hildesheim",
    "Cottbus",
    "Gera",
    "Gütersloh",
    "Kaiserslautern",
    "Schwerin",
    "Iserlohn",
    "Zwickau",
    "Düren",
    "Esslingen am Neckar",
    "Ratingen",
    "Marl",
    "Lünen",
    "Velbert",
    "Minden",
    "Rheine",
    "Wilhelmshaven",
    "Hanau",
    "Bensheim",
    "Gießen",
    "Troisdorf",
    "Delmenhorst",
    "Tokyo",
    "New York City",
    "London",
    "Paris",
    "Beijing",
    "Moscow",
    "Istanbul",
    "Dubai",
    "Shanghai",
    "Mumbai",
    "São Paulo",
    "Delhi",
    "Los Angeles",
    "Cairo",
    "Buenos Aires",
    "Rio de Janeiro",
    "Seoul",
    "Mexico City",
    "Osaka",
    "Karachi",
    "Manila",
    "Jakarta",
    "Dhaka",
    "Kolkata",
    "Lagos",
    "Bangkok",
    "Tehran",
    "Lima",
    "Kinshasa",
    "Johannesburg",
    "Nairobi",
    "Chicago",
    "Guangzhou",
    "Hong Kong",
    "Shenzhen",
    "Bangalore",
    "Ho Chi Minh City",
    "Mumbai (Bombay)",
    "Sydney",
    "Buenos Aires",
    "Tehran",
    "Riyadh",
    "Alexandria",
    "Kuala Lumpur",
    "Casablanca",
    "Santiago",
    "Toronto",
    "Melbourne",
    "Riyadh",
    "Alexandria",
    "Kuala Lumpur",
    "Casablanca",
    "Santiago",
    "Toronto",
    "Melbourne",
    "Madrid",
    "Frankfurt",
    "Washington, D.C.",
    "Miami",
    "Boston",
    "San Francisco",
    "Seattle",
    "Dubai",
    "Amsterdam",
    "Rome",
    "Milan",
    "Munich",
    "Berlin",
    "Stockholm",
    "Prague",
    "Warsaw",
    "Budapest",
    "Vienna",
    "Athens",
    "Copenhagen",
    "Zurich",
    "Brussels",
    "Lisbon",
    "Oslo",
    "Helsinki",
    "Reykjavik",
    "Dublin",
    "Cape Town",
    "Lagos",
    "Addis Ababa",
    "Accra",
    "Nairobi",
    "Dakar",
    "Singapore",
    "Kuala Lumpur",
    "Bangkok",
    "Hanoi",
    "Jakarta",
    "Manila",
    "Sydney",
    "Melbourne",
    "Auckland",
    "Vancouver",
    "Buenos Aires",
    "Rio de Janeiro"
];

header('Content-type: application/xml');
$blog_timezone = 'MEZ';
$timezone_offset = '-02:00';
$W3Cdf = 'Y-m-d\Th:i:sP'; // See http://www.w3.org/TR/NOTE-datetime

echo '<?xml version="1.0" encoding="UTF-8"?>'."\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

$lastmod = date($W3Cdf, filemtime('js/main.js'));
$server_name = $_SERVER['SERVER_NAME'];


echo "<url>\n";
echo "<loc>\n";
echo "https://".$server_name."\n";
echo "</loc>\n";
echo "<lastmod>\n";
echo $lastmod."\n";
echo "</lastmod>\n";
echo "</url>\n";

foreach ($cities as $city) {
    echo "<url>\n";
    echo "<loc>\n";
    echo "https://".$server_name."/".$city."\n";
    echo "</loc>\n";
    echo "<lastmod>\n";
    echo $lastmod."\n";
    echo "</lastmod>\n";
    echo "</url>\n";
}

echo "</urlset>";

die();