---
statblock: true
name: Minotaur
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 4
ac: 14
hp: 76
hit_dice: '9d10 + 27'
speed: '40 ft.'
stats:
    - 18
    - 10
    - 16
    - 10
    - 16
    - 10
skillsaves:
    - { perception: 5 }
senses: 'darkvision 60 ft., passive Perception 18'
languages: 'Abyssal, Undercommon'
traits:
    - { name: 'Labyrinthine Recall', desc: 'The minotaur can perfectly recall any route it has traveled.' }
actions:
    - { name: Greataxe, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 17 (2d12 + 4) slashing damage. The minotaur can choose to make the attack with advantage. If it does so, attacks against it have advantage until the start of its next turn.' }
    - { name: Gore, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 13 (2d8 + 4) piercing damage. If the minotaur moves at least 10 feet straight towards the target before the attack, the attack deals an extra 9 (2d8) damage, and the target makes a DC 16 Strength saving throw, being pushed up to 10 feet away and falling prone on a failure.' }
'bonus actions':
    - { name: 'Roar of Triumph', desc: 'If the minotaur reduced a living creature to 0 hit points since the end of its last turn, it roars and gains 10 (3d6) temporary hit points.' }
combat:
    - { name: 'The minotaur gores if it can charge without incurring an opportunity attack', desc: "Otherwise it attacks with its greataxe. The minotaur retreats if it is bloodied and it can't reach a foe on its turn." }

---
```statblock
monster: Minotaur
```
