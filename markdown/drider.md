---
statblock: true
name: 'Drider - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 6
ac: 17
hp: 114
hit_dice: '12d10 + 48'
speed: '30 ft., climb 30 ft.'
stats:
    - 18
    - 16
    - 18
    - 10
    - 16
    - 12
damage_resistances: poison
skillsaves:
    perception: 6
    stealth: 6
    survival: 6
senses: 'darkvision 120 ft., passive Perception 16'
languages: 'Undercommon, one more'
traits:
    - { name: 'Spider Climb', desc: 'The drider can use its climb speed even on difficult surfaces and upside down on ceilings.' }
    - { name: 'Sunlight Sensitivity', desc: 'While in sunlight, the drider has disadvantage on attack rolls, as well as on Perception checks that rely on sight.' }
    - { name: 'Web Walker', desc: 'The drider ignores movement restrictions imposed by webs.' }
actions:
    - { name: Multiattack, desc: 'The drider makes a claws attack and then either a bite or longsword attack. Alternatively, it makes two longbow attacks.' }
    - { name: Claws, desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 15 (2d10 + 4) piercing damage, and the target is grappled (escape DC 15). While grappling a target, the drider can't attack a different target with its claws." }
    - { name: Bite, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one grappled creature. Hit: 2 (1d4) piercing damage plus 13 (3d8) poison damage.' }
    - { name: 'Longsword (wielded two-handed)', desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 9 (1d10 + 4) slashing damage.' }
    - { name: Longbow, desc: 'Melee Weapon Attack: +6 to hit, range 120/600 ft., one target. Hit: 7 (1d8 + 3) piercing damage plus 7 (2d6) poison damage.' }
combat:
    - { name: 'The drider attacks from hiding when it can', desc: "It starts combat by grappling a target with its claws. If successful, it bites; otherwise, it attacks with its longsword. It doesn't bite creatures it knows to be resistant to poison damage, such as other driders." }

---
```statblock
monster: Drider - A5E
```
