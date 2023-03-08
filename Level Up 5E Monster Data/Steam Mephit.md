---
statblock: true
name: 'Steam Mephit'
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Elemental
cr: 1
ac: 10
hp: 21
hit_dice: 6d6
speed: '30 ft., fly 30 ft.'
stats:
    - 6
    - 10
    - 10
    - 8
    - 10
    - 10
damage_immunities: 'fire, poison'
condition_immunities: poisoned
senses: 'darkvision 60 ft., passive Perception 10'
languages: 'Aquan, Ignan'
traits:
    - { name: 'Death Burst', desc: 'When the mephit dies, it explodes into steam. Each creature within 5 feet makes a DC 10 Constitution saving throw, taking 4 (1d8) fire damage on a failed save.' }
    - { name: 'Elemental Nature', desc: "A mephit doesn't require air, sustenance, or sleep." }
actions:
    - { name: Claws, desc: 'Melee Weapon Attack: +3 to hit, reach 5 ft., one target. Hit: 2 (1d4) slashing damage plus 2 (1d4) fire damage.' }
    - { name: 'Blurred Form (1/Day, Bloodied Only)', desc: 'The mephit uses magical illusion to blur its form. For 1 minute, attacks against the mephit are made with disadvantage.' }
    - { name: 'Steam Breath (1/Day)', desc: 'The mephit exhales a 15-foot cone of steam. Each creature in the area makes a DC 10 Constitution saving throw, taking 4 (1d8) fire damage on a failed save or half damage on a success.' }
combat:
    - { name: 'The mephit uses Steam Breath and then attacks with its claws', desc: "It uses Blurred Form as soon as it's bloodied. It retreats when reduced to 5 hit points or fewer." }

---
```statblock
monster: Steam Mephit
```
