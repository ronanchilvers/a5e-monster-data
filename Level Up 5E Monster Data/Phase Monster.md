---
statblock: true
name: 'Phase Monster'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 4
ac: 13
hp: 85
hit_dice: '10d10 + 30'
speed: '30 ft., fly 50 ft.'
stats:
    - 18
    - 14
    - 16
    - 4
    - 14
    - 8
saves:
    - { dexterity: 4 }
skillsaves:
    - { perception: 4 }
    - { stealth: 4 }
senses: 'darkvision 60 ft., passive Perception 14'
traits:
    - { name: 'Mirror Image', desc: "A magical illusion cloaks the phase monster, creating a reflection of the monster nearby and concealing its precise location. While the monster is not incapacitated, attack rolls against it have disadvantage. When a creature hits the phase monster with an attack, this trait stops working until the end of the phase monster's next turn." }
actions:
    - { name: Multiattack, desc: 'The phase monster attacks with its horns and its claws.' }
    - { name: Horns, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 8 (2d4 + 3) bludgeoning damage. If the target is a creature and the phase monster moves at least 20 feet straight towards the target before the attack, the target takes an additional 5 (2d4) bludgeoning damage and makes a DC 14 Strength saving throw, falling prone on a failure.' }
    - { name: 'Claws (True Form Only)', desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 8 (2d4 + 3) slashing damage, plus an additional 5 (2d4) slashing damage if the target is prone.' }
    - { name: 'Blood-Curdling Scream (Recharge 56)', desc: "The phase monster unleashes a horrific screech. Each creature within 60 feet that can hear it makes a DC 13 Wisdom saving throw. On a failure, it is frightened for 1 minute. While frightened by Blood-Curdling Scream, a creature must take the Dash action and move away from the phase monster by the safest available route on each of its turns, unless there is nowhere to move. If the creature ends its turn in a location where it doesn't have line of sight to the phase monster, the creature makes a Wisdom saving throw. On a successful save, it is no longer frightened." }
'bonus actions':
    - { name: Shapeshift, desc: 'The phase monster magically changes its form to that of a Small goat or into its true form. While in goat form, it loses its fly speed and Mirror Image trait. Its statistics, other than its size and speed, are unchanged in each form.' }
combat:
    - { name: 'The phase monster begins combat by using Blood-Curdling Scream', desc: "It then charges a foe, preferably one not frightened by its scream. On subsequent turns, if its Mirror Image trait is active, it charges a second foe that's at least 20 feet away, even if that means triggering an opportunity attack. If its Mirror Image trait is inactive, it instead stands and fights its current opponent. If the phase monster starts its turn bloodied and its Mirror Image trait is inactive, it flies away." }

---
```statblock
monster: Phase Monster
```
