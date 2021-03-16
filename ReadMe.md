## MVP: Minimum Viable Product

En tant qu'utilisateur :
#0 Je veux accéder aux menus qui sont actifs
#1 Je veux voir les boissons liées à chaque menu, rangées par catégorie
#2 Je veux voir la description de chaque boisson (prix, taux d'alcool, description, composition si cocktail)
#3 Je veux accéder à la liste des serveurs de l'établissement
#4 Pour chaque serveur, je veux voir son nom, son prénom, son âge, une petite présentation, et s'il travaille le midi, le soir ou les deux

## Entities

# Menu Entity
id : Uniq Key (Int) 
name : Varchar / String 
active : Boolean

# Drink Entity
id : Uniq Key (Int)
name : Varchar / String
price : Float
alcohol_level : Float
category_id : Foreign key(int) 
description : Varchar / Text
composition : Varchar / Text

# Category Entity
id : Uniq Key (Int)
name : Varchar / String

# Menu_has_drink
drink_id : Foreign Key (Int) 
menu_id : Foreign Key (Int) 

# Waiter Entity
id : Uniq Key (Int)
first_name : Varchar / String
last_name : Varchar / String
age : Int
presentation : Varchar / Text
lunch : Boolean
dinner : Boolean
