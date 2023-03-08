---
statblock: true
name: Darkmantle
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Monstrosity
cr: 1
ac: 11
hp: 22
hit_dice: '5d6 + 5'
speed: '10 ft., fly 30 ft.'
stats:
    - 16
    - 12
    - 12
    - 2
    - 10
    - 5
senses: 'blindsight 60 ft., passive Perception 10'
traits:
    - { name: Echolocation, desc: "The darkmantle can't use blindsight while deafened." }
    - { name: 'False Appearance', desc: 'While motionless, the darkmantle is indistinguishable from rock.' }
actions:
    - { name: Multiattack, desc: 'The darkmantle uses Darkness Aura and makes a crush attack.' }
    - { name: 'Darkness Aura', desc: "A 15-foot radius area of magical darkness emanates from the darkmantle, spreading around corners and moving with it. Darkvision and natural light can't penetrate it. If the darkness overlaps with an area of light created by a 2nd-level spell or lower, the spell creating the light is dispelled. The darkness aura lasts for 10 minutes or until the darkmantle takes damage." }
    - { name: Crush, desc: "Melee Weapon Attack: +5 to hit, reach 5 ft., one creature. Hit: 6 (1d6 + 3) bludgeoning damage, and the target is grappled (escape DC 13). If the darkmantle made the attack with advantage, it attaches to the target's head, and the target is blinded and can't breathe. While grappling, the darkmantle can only attack the grappled creature but has advantage on its attack roll. The darkmantle's speed becomes 0, and it moves with its target." }
combat:
    - { name: 'The darkmantle lies in ambush on the ceiling, waiting until a creature comes within 10 feet', desc: 'It then creates its Darkness Aura and flies to attack a victim. It flees if it fails to grapple a creature or if detached.' }

---
```statblock
monster: Darkmantle
```
