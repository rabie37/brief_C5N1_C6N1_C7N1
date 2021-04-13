 
--
-- Structure de la table `animals`
--

CREATE TABLE `animals` (
  `pet_id` int(11) NOT NULL,
  `petcaetegory` varchar(11) NOT NULL,
  `breed` varchar(11) NOT NULL,
  `weight` varchar(11) NOT NULL,
  `height` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `fur` varchar(11) NOT NULL,
  `cost` int(11) NOT NULL
);

 
--
-- Structure de la table `birds`
--

CREATE TABLE `birds` (
  `pet_id` varchar(11) NOT NULL,
  `petcategory` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `noise` varchar(11) NOT NULL,
  `cost` int(11) NOT NULL
)  ;

 


--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `cs_id` varchar(11) NOT NULL,
  `cs_fname` varchar(11) NOT NULL,
  `cs_lname` varchar(11) NOT NULL,
  `cs_minit` varchar(11) NOT NULL,
  `cs_address` varchar(50) NOT NULL
);

 
--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ;

 
--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `pp_id` varchar(11) NOT NULL,
  `pp_name` varchar(50) NOT NULL,
  `pp_type` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `belongs_to` varchar(50) NOT NULL
);

 
--
-- Structure de la table `salesdetails`
--

CREATE TABLE `salesdetails` (
  `sd_ID` varchar(11) NOT NULL,
  `cs_id` varchar(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `total` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 