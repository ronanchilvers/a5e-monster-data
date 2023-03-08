---
statblock: true
name: 'Sahuagin Champion'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 5
ac: 16
hp: 90
hit_dice: '12d8 + 36'
speed: '40 ft., swim 40 ft.'
stats:
    - 18
    - 18
    - 16
    - 10
    - 12
    - 14
saves:
    - { strength: 7 }
    - { dexterity: 7 }
    - { constitution: 6 }
    - { wisdom: 4 }
skillsaves:
    - { athletics: 7 }
    - { intimidation: 5 }
    - { perception: 4 }
    - { stealth: 7 }
    - { survival: 4 }
senses: 'darkvision 120 ft., passive Perception 14'
languages: Sahuagin
traits:
    - { name: 'Blood Frenzy', desc: "The sahuagin has advantage on melee attack rolls against creatures that don't have all their hit points." }
    - { name: 'Limited Amphibiousness', desc: 'The sahuagin can breathe air and water. When breathing air, it must immerse itself in water once every 4 hours or begin to suffocate.' }
    - { name: 'Shark Telepathy', desc: 'The sahuagin can command any shark within 120 feet of it using magical telepathy.' }
actions:
    - { name: Multiattack, desc: 'The sahuagin attacks twice.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 8 (1d8 + 4) slashing damage.' }
    - { name: Trident, desc: 'Melee or Ranged Weapon Attack: +7 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 7 (1d6 + 4) piercing damage, or 8 (1d8 + 4) if wielded in two hands in melee.' }
'bonus actions':
    - { name: Bite, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 6 (1d4 + 4) piercing damage.' }
combat:
    - { name: 'The sahuagin champion fights in melee with its trident and bite', desc: 'It almost never throws its trident, except at a fleeing foe.' }

---
```statblock
monster: Sahuagin Champion
```
