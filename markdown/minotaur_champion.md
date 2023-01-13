---
statblock: true
name: 'Minotaur Champion - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Monstrosity
cr: 16
ac: 19
hp: 262
hit_dice: '21d12 + 126'
speed: '50 ft.'
stats:
    - 22
    - 10
    - 22
    - 10
    - 16
    - 14
saves:
    strength: 11
    dexterity: 5
    constitution: 11
    wisdom: 8
skillsaves:
    perception: 8
senses: 'darkvision 120 ft., passive Perception 21'
languages: 'Abyssal, Undercommon'
traits:
    - { name: 'Labyrinthine Recall', desc: 'The minotaur can perfectly recall any route it has traveled.' }
    - { name: 'Magic Resistance', desc: 'The minotaur has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Multiattack, desc: 'The minotaur gores once and attacks twice with its greataxe.' }
    - { name: Gore, desc: 'Melee Weapon Attack: +11 to hit, reach 5 ft., one target. Hit: 19 (3d8 + 6) piercing damage, and the target makes a DC 19 Strength saving throw, being pushed up to 5 feet away and falling prone on a failure. If the minotaur moves at least 10 feet straight towards the target before the attack, the attack deals an extra 13 (3d8) damage.' }
    - { name: Greataxe, desc: 'Melee Weapon Attack: +11 to hit, reach 10 ft., one target. Hit: 25 (3d12 + 6) slashing damage.' }
    - { name: 'Fire Breath (Recharge 5-6)', desc: 'The minotaur exhales fire in a 30-foot cone. Each creature in the area makes a DC 19 Dexterity saving throw, taking 55 (10d10) fire damage on a failed save or half damage on a success.' }
'bonus actions':
    - { name: 'Roar of Triumph', desc: 'If the minotaur reduced a living creature to 0 hit points since the end of its last turn, it roars and gains 35 (10d6) temporary hit points.' }
combat:
    - { name: 'The minotaur champion charges and gores whenever possible, flinging enemies with its horns and then attacking prone creatures with its axe', desc: "It uses Fire Breath if it can include at least two enemies in its area. It retreats if it takes heavy damage from ranged attackers it can't reach." }

---
```statblock
monster: Minotaur Champion - A5E
```
