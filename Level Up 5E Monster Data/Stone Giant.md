---
statblock: true
name: 'Stone Giant'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Giant
cr: 8
ac: 17
hp: 126
hit_dice: '11d12 + 55'
speed: '40 ft.'
stats:
    - 23
    - 14
    - 20
    - 10
    - 12
    - 10
damage_resistances: acid
condition_immunities: petrified
saves:
    - { strength: 9 }
    - { dexterity: 5 }
    - { constitution: 8 }
    - { wisdom: 4 }
skillsaves:
    - { athletics: 9 }
    - { perception: 4 }
    - { stealth: 5 }
senses: 'passive Perception 14'
languages: Giant
traits:
    - { name: Camouflage, desc: 'The giant has advantage on Stealth checks made to hide in rocky terrain.' }
actions:
    - { name: Multiattack, desc: 'The giant attacks twice with its greatclub or twice with rocks.' }
    - { name: Greatclub, desc: 'Melee Weapon Attack: +9 to hit, reach 15 ft., one target. Hit: 19 (3d8 + 6) bludgeoning damage. If the target is a Large or smaller creature, it makes a DC 19 Strength saving throw, falling prone on a failure.' }
    - { name: Rock, desc: 'Ranged Weapon Attack: +9 to hit, range 60/240 ft., one target. Hit: 20 (4d6 + 6) bludgeoning damage. If the target is a Large or smaller creature, it makes a DC 19 Strength saving throw. On a failure, it is pushed 10 feet away from the giant and knocked prone. In lieu of a rock, the giant can throw a grappled Medium or smaller creature up to 30 feet. On a hit, the target and the thrown creature both take 15 (3d6 + 5) bludgeoning damage. On a miss, only the thrown creature takes the damage. The thrown creature falls prone in an unoccupied space 5 feet from the target.' }
reactions:
    - { name: 'Rock Catching', desc: 'If a rock or other Small or larger projectile is hurled or fired at the giant, the giant makes a DC 10 Dexterity saving throw. On a success, the giant catches the projectile, takes no bludgeoning or piercing damage from it, and is not pushed or knocked prone by it.' }
'bonus actions':
    - { name: Grab, desc: "One creature within 5 feet makes a DC 13 Dexterity saving throw. On a failure, it is grappled (escape DC 17). Until this grapple ends, the giant can't grab another target, and it makes greatclub attacks with advantage against the grappled target." }
combat:
    - { name: "Stone giants prefer ranged combat: they don't close to melee range unless they're out of rocks", desc: "On the other hand, they don't retreat from melee. A stone giant will die in battle to protect its home. Otherwise, it parleys or surrenders once bloodied." }

---
```statblock
monster: Stone Giant
```
