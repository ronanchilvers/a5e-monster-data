---
statblock: true
name: 'Gladiator - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 6
ac: 16
hp: 105
hit_dice: '14d8 + 42'
speed: '30 ft.'
stats:
    - 18
    - 14
    - 16
    - 10
    - 12
    - 14
saves:
    - { strength: 7 }
    - { constitution: 6 }
skillsaves:
    - { athletics: 7 }
    - { intimidation: 5 }
    - { performance: 5 }
senses: 'passive Perception 11'
languages: 'any one'
traits:
    - { name: 'Combat Expertise', desc: "The damage of the gladiator's attacks includes a d6 expertise die." }
actions:
    - { name: Multiattack, desc: 'The gladiator makes two melee attacks with their spear or throws two javelins.' }
    - { name: Spear, desc: 'Melee or Ranged Weapon Attack: +7 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 11 (2d6 + 4) piercing damage.' }
    - { name: Shield, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 11 (2d6 + 4) bludgeoning damage.' }
    - { name: Javelin, desc: 'Melee or Ranged Weapon Attack: +7 to hit, reach 5 ft. or range 30/120 ft., one target. Hit: 11 (2d6 + 4) piercing damage.' }
reactions:
    - { name: 'Shield Block', desc: 'If the gladiator is wielding a shield and can see their attacker, they add 3 to their AC against one melee or ranged attack that would hit them.' }
'bonus actions':
    - { name: 'Shield Rush', desc: 'The gladiator makes an attack with their shield. On a hit, the target makes a DC 15 Dexterity saving throw, falling prone on a failure.' }

---
```statblock
monster: Gladiator - A5E
```
