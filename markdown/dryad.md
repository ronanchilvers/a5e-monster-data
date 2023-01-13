---
statblock: true
name: 'Dryad - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fey
cr: 1
ac: 15
hp: 22
hit_dice: 5d8
speed: '30 ft.'
stats:
    - 14
    - 12
    - 10
    - 12
    - 16
    - 18
'damage vulenrabilities': fire
skillsaves:
    - { nature: 3 }
    - { perception: 5 }
    - { stealth: 3 }
    - { survival: 5 }
senses: 'darkvision 60 ft., passive Perception 14'
languages: 'Elvish, Sylvan'
traits:
    - { name: 'Magic Resistance', desc: 'The dryad has advantage on saving throws against spells and magical effects.' }
    - { name: 'Speak with Nature', desc: 'The dryad can communicate with beasts and plants.' }
    - { name: 'Tree Stride', desc: 'Once per turn, the dryad can use 10 feet of movement to enter a living tree and emerge from another living tree within 60 feet. Both trees must be at least Large.' }
actions:
    - { name: Club, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 6 (1d8 + 2) bludgeoning damage.' }
    - { name: 'Entangling Plants', desc: "Plants magically erupt from the ground in a 20-foot radius around a point up to 120 feet from the dryad. Each creature of the dryad's choice in the area makes a DC 13 Strength saving throw. On a failure, a creature is restrained for 1 minute. A creature can use its action to make a DC 12 Strength check, freeing itself or a creature within 5 feet on a success. Additionally, the area is difficult terrain for 1 minute." }
    - { name: 'Fey Charm (3/Day)', desc: "A humanoid or beast within 30 feet makes a DC 13 Wisdom saving throw. On a failure, it is magically charmed. While charmed in this way, the target regards the dryad as a trusted ally and is disposed to interpret the dryad's requests and actions favorably. The creature can repeat this saving throw if the dryad or the dryad's allies harm it, ending the effect on a success. Otherwise, the effect lasts 24 hours. If the creature succeeds on a saving throw against Fey Charm or the effect ends for it, it is immune to Fey Charm for 24 hours." }
combat:
    - { name: 'The dryad avoids combat, using Fey Charm to recruit allies and Entangling Plants to slow enemies', desc: 'When it must fight, it uses its club.' }

---
```statblock
monster: Dryad - A5E
```
