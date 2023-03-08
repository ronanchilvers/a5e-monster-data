---
statblock: true
name: Ur-Otyugh
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Aberration
cr: 10
ac: 14
hp: 144
hit_dice: '17d10 + 51'
speed: '50 ft., swim 50 ft.'
stats:
    - 16
    - 10
    - 16
    - 6
    - 14
    - 5
saves:
    - { strength: 6 }
    - { constitution: 6 }
senses: 'darkvision 120 ft., passive Perception 12'
languages: 'telepathy 120 ft. (can transmit but not receive thoughts and images)'
traits:
    - { name: 'Legendary Resistance (2/Day)', desc: 'If the ur-otyugh fails a saving throw, it can choose to succeed instead. When it does so, it becomes more sluggish. Each time the ur-otyugh uses Legendary Resistance, its Speed and swim speed decrease by 10 and it loses one of its legendary actions on each of its turns.' }
actions:
    - { name: Multiattack, desc: 'The otyugh makes two tentacle attacks.' }
    - { name: Tentacle, desc: "Melee Weapon Attack: +6 to hit, reach 10 ft., one target. Hit: 7 (1d8 + 3) bludgeoning damage plus 4 (1d8) piercing damage. If the target is a Medium or smaller creature, it is grappled (escape DC 14) and restrained until the grapple ends. The otyugh has two tentacles, each of which can grapple one target and can't attack a different target while doing so." }
    - { name: 'Tentacle Slam', desc: "The otyugh slams any creatures it is grappling into a hard surface or into each other. Each creature makes a DC 14 Strength saving throw. On a failure, the target takes 10 (2d6 + 3) bludgeoning damage, is stunned until the end of the otyugh's next turn, and is pulled up to 5 feet towards the otyugh. On a success, the target takes half damage." }
'bonus actions':
    - { name: Bite, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 12 (2d8 + 3) piercing damage. If the target is a creature, it makes a DC 14 Constitution saving throw. On a failure, the target contracts a disease. While diseased, the target is poisoned. The target repeats the saving throw every 24 hours, reducing its hit point maximum by 5 (1d10) on a failure (to a minimum of 1 hit point) and becoming cured on a success. The reduction in hit points lasts until the disease is cured.' }
    - { name: Swallow, desc: "If the otyugh has no other creature in its stomach, the otyugh bites a Medium or smaller creature that is stunned. On a hit, the creature is swallowed. A swallowed creature has total cover from attacks from outside the otyugh, is blinded and restrained, and takes 10 (3d6) acid damage at the start of each of the otyugh's turns." }
    - { name: 'If a swallowed creature deals 15 or more damage to the otyugh in a single turn, or if the otyugh dies, the otyugh vomits up the creature', desc: '' }
legendary_actions:
    - { name: 'The ur-otyugh can take 2 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: 'Mad Dash', desc: 'The ur-otyugh moves up to half its Speed.' }
    - { name: Tentacle, desc: 'The ur-otyugh makes a tentacle attack. This attack has a range of 15 feet.' }
    - { name: 'Mental Fuzz (Costs 2 Actions, While Bloodied)', desc: "The ur-otyugh transmits a burst of psionic static. Each non-aberration within 30 feet makes a DC 14 Intelligence saving throw. On a failure, a creature takes 14 (4d6) psychic damage and is stunned until the end of the ur-otyugh's next turn. On a success, the creature takes half damage." }
combat:
    - { name: 'The otyugh grasps creatures with its tentacles', desc: 'If it has two creatures grappled, it uses its Tentacle Slam. If it stuns a target, it swallows it. It retreats once it has swallowed a creature or when it is bloodied.' }

---
```statblock
monster: Ur-Otyugh
```
