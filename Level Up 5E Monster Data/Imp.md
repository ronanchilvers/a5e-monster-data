---
statblock: true
name: 'Imp - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Tiny
type: Fiend
cr: 1
ac: 13
hp: 14
hit_dice: '4d4 + 4'
speed: '20 ft., fly 40 ft.'
stats:
    - 6
    - 16
    - 12
    - 10
    - 12
    - 14
damage_resistances: 'cold; damage from nonmagical, non-silvered weapons'
damage_immunities: 'fire, poison'
condition_immunities: poisoned
skillsaves:
    - { deception: 4 }
    - { insight: 3 }
    - { perception: 3 }
    - { persuasion: 4 }
    - { stealth: 5 }
senses: 'darkvision 120 ft., passive Perception 13'
languages: 'Infernal, telepathy 120 ft.'
traits:
    - { name: "Devil's Sight", desc: "The imp's darkvision penetrates magical darkness." }
    - { name: Ventriloquism, desc: 'The imp can perfectly imitate any voice it has heard. It can make its voice appear to originate from any point within 30 feet.' }
    - { name: 'Lawful Evil', desc: 'The imp radiates a Lawful and Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The imp has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: 'Sting (Bite While Shapeshifted)', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 5 (1d4 + 3) piercing damage plus 3 (1d6) poison damage.' }
    - { name: Shapeshift, desc: 'The imp magically changes its form into a rat (speed 20 ft.), raven (20 ft., fly 60 ft.), or spider (20 ft., climb 20 ft.) or back into its true form. Its statistics are the same in each form except for its movement speeds. Equipment it carries is not transformed. It reverts to its true form if it dies.' }
'bonus actions':
    - { name: Invisibility, desc: 'The imp magically turns invisible, along with any equipment carried. This invisibility ends if the imp makes an attack, falls unconscious, or dismisses the effect.' }
combat:
    - { name: 'Whenever the imp attacks with its sting, it turns invisible immediately afterwards and then moves if it can', desc: 'It might spend some turns hiding without attacking. It changes targets and tactics frequently, since it can be killed with a readied action or an area attack if it becomes too predictable. Once damaged, it hides invisibly. The imp sometimes uses its Ventriloquism ability to create confusion and miscommunication.' }

---
```statblock
monster: Imp - A5E
```
