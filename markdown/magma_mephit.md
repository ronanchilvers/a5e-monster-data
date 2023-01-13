---
statblock: true
name: 'Magma Mephit - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Elemental
cr: 1
ac: 11
hp: 21
hit_dice: 6d6
speed: '30 ft., fly 30 ft.'
stats:
    - 8
    - 12
    - 10
    - 8
    - 10
    - 10
damage_immunities: 'fire, poison'
condition_immunities: poisoned
'damage vulenrabilities': cold
skillsaves:
    - { perception: 2 }
    - { stealth: 3 }
senses: 'darkvision 60 ft., passive Perception 12'
languages: 'Ignan, Terran'
traits:
    - { name: 'Death Burst', desc: 'When the mephit dies, it explodes into lava. Each creature within 5 feet makes a DC 10 Constitution saving throw, taking 4 (1d8) fire damage on a failed save or half damage on a success.' }
    - { name: 'False Appearance', desc: 'While motionless, the mephit is indistinguishable from a small magma flow.' }
    - { name: 'Elemental Nature', desc: "A mephit doesn't require air, sustenance, or sleep." }
actions:
    - { name: Claws, desc: 'Melee Weapon Attack: +3 to hit, reach 5 ft., one target. Hit: 3 (1d4 + 1) slashing damage plus 2 (1d4) fire damage.' }
    - { name: 'Heat Metal (1/Day)', desc: 'Ranged Spell Attack: +4 to hit, range 60 ft., one creature wearing or holding a metal object. Hit: 9 (2d8) fire damage. If a creature is holding the object and suffers damage, it makes a DC 10 Constitution saving throw, dropping the object on a failure.' }
    - { name: 'Fire Breath (1/Day)', desc: 'The mephit exhales a 15-foot cone of fire. Each creature in the area makes a DC 10 Constitution saving throw, taking 7 (2d6) fire damage on a failed save or half damage on a success.' }
combat:
    - { name: 'The mephit uses Fire Breath and then uses Heat Metal, prioritizing creatures that have threatened it with metal weapons', desc: 'It flees only if it takes cold damage.' }

---
```statblock
monster: Magma Mephit - A5E
```
