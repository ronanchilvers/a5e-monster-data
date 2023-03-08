---
statblock: true
name: Grick
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Monstrosity
cr: 2
ac: 14
hp: 33
hit_dice: '6d8 + 12'
speed: '30 ft., climb 30 ft.'
stats:
    - 14
    - 14
    - 14
    - 2
    - 14
    - 5
damage_resistances: 'damage from nonmagical weapons'
skillsaves:
    - { stealth: 4 }
senses: 'darkvision 60 ft., passive Perception 12'
traits:
    - { name: Camouflage, desc: 'The grick has advantage on Stealth checks made to hide in rocky terrain.' }
    - { name: 'Spider Climb', desc: 'The grick can use its climb speed even on difficult surfaces and upside down on ceilings.' }
actions:
    - { name: Tentacles, desc: "Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 9 (2d6 + 2) bludgeoning damage, and the target is grappled (escape DC 12). Until this grapple ends, the grick can't attack a different target with its tentacles." }
'bonus actions':
    - { name: Beak, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one creature grappled by the grick. Hit: 9 (2d6 + 2) piercing damage.' }
combat:
    - { name: 'The grick tries to attack with surprise, seizing its prey with its tentacles and attacking with its beak', desc: "It climbs to safety if it's bloodied and not grappling a creature." }

---
```statblock
monster: Grick
```
